<?php

namespace App\Controller;

use App\Entity\Firearm;
use App\Entity\Melee;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UpdateController extends AbstractController
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly ManagerRegistry     $managerRegistry,
    )
    {
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function weapons(): Response
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        $em = $this->managerRegistry->getManager();

        $response = $this->httpClient->request('GET', 'https://api.warframestat.us/weapons');

        $existingWeaponsUnsorted = $this->managerRegistry->getRepository(Firearm::class)->findAll();
        $existingWeaponsUnsorted = array_merge($existingWeaponsUnsorted, $this->managerRegistry->getRepository(Melee::class)->findAll());
        $existingWeapons = [];

        foreach ($existingWeaponsUnsorted as $weapon) {
            $existingWeapons[$weapon->getName()] = $weapon;
        }

        $weapons = $response->toArray();
        foreach ($weapons as $result) {
            if (array_key_exists($result['name'], $existingWeapons)) {
                $weapon = $existingWeapons[$result['name']];
            } else {
                if ($result['slot'] == 5) {
                    $weapon = new Melee();
                } else {
                    $weapon = new Firearm();
                }
            }

            foreach ($result as $key => $value) {
                if ($key === 'trigger') {
                    $key = 'triggerType';
                }

                if ($key === 'range') {
                    $key = 'attackRange';
                }
                $propertyAccessor->setValue($weapon, $key, $value);
            }

            $em->persist($weapon);
        }

        $em->flush();

        $this->addFlash('notice', 'All weapons have been updated');

        return $this->redirectToRoute('index');
    }
}
