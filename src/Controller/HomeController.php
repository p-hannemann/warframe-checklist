<?php

namespace App\Controller;

use App\Repository\FirearmRepository;
use App\Repository\MeleeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function __construct(
        private readonly FirearmRepository $firearmRepository,
        private readonly MeleeRepository $meleeRepository,
    )
    {
    }

    public function index(): Response
    {

        $weapons = $this->firearmRepository->findAll();
        $meleeWeapons = $this->meleeRepository->findAll();
        foreach ($meleeWeapons as $meleeWeapon) {
            $weapons[] = $meleeWeapon;
        }

        return $this->render('home/index.html.twig', [
            'weapons' => $weapons
        ]);
    }
}
