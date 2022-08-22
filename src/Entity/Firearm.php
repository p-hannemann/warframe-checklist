<?php

namespace App\Entity;

use App\Repository\FirearmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FirearmRepository::class)]
class Firearm extends Weapon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $accuracy = null;

    #[ORM\Column(nullable: true)]
    private ?int $ammo = null;

    #[ORM\Column(nullable: true)]
    private ?int $magazineSize = null;

    #[ORM\Column(nullable: true)]
    private ?float $multishot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $noise = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $triggerType = null;

    #[ORM\Column(nullable: true)]
    private ?float $reloadTime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccuracy(): ?float
    {
        return $this->accuracy;
    }

    public function setAccuracy(?float $accuracy): self
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    public function getAmmo(): ?int
    {
        return $this->ammo;
    }

    public function setAmmo(?int $ammo): self
    {
        $this->ammo = $ammo;

        return $this;
    }

    public function getMagazineSize(): ?int
    {
        return $this->magazineSize;
    }

    public function setMagazineSize(?int $magazineSize): self
    {
        $this->magazineSize = $magazineSize;

        return $this;
    }

    public function getMultishot(): ?float
    {
        return $this->multishot;
    }

    public function setMultishot(?float $multishot): self
    {
        $this->multishot = $multishot;

        return $this;
    }

    public function getNoise(): ?string
    {
        return $this->noise;
    }

    public function setNoise(?string $noise): self
    {
        $this->noise = $noise;

        return $this;
    }

    public function getTriggerType(): ?string
    {
        return $this->triggerType;
    }

    public function setTriggerType(?string $triggerType): self
    {
        $this->triggerType = $triggerType;

        return $this;
    }

    public function getReloadTime(): ?float
    {
        return $this->reloadTime;
    }

    public function setReloadTime(?float $reloadTime): self
    {
        $this->reloadTime = $reloadTime;

        return $this;
    }
}
