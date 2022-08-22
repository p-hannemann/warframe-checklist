<?php

namespace App\Entity;

use App\Repository\MeleeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeleeRepository::class)]
class Melee extends Weapon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $blockingAngle = null;

    #[ORM\Column(nullable: true)]
    private ?int $comboDuration = null;

    #[ORM\Column(nullable: true)]
    private ?float $followThrough = null;

    #[ORM\Column(nullable: true)]
    private ?int $heavyAttackDamage = null;

    #[ORM\Column(nullable: true)]
    private ?int $heavySlamAttack = null;

    #[ORM\Column(nullable: true)]
    private ?int $heavySlamRadialDamage = null;

    #[ORM\Column(nullable: true)]
    private ?int $heavySlamRadius = null;

    #[ORM\Column(nullable: true)]
    private ?float $AttackRange = null;

    #[ORM\Column(nullable: true)]
    private ?int $slamAttack = null;

    #[ORM\Column(nullable: true)]
    private ?int $slamRadialDamage = null;

    #[ORM\Column(nullable: true)]
    private ?int $slamRadius = null;

    #[ORM\Column(nullable: true)]
    private ?int $slideAttack = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stancePolarity = null;

    #[ORM\Column(nullable: true)]
    private ?float $windUp = null;

    #[ORM\Column(nullable: true)]
    private array $drops = [];

    #[ORM\Column(nullable: true)]
    private ?bool $excludeFromCodex = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlockingAngle(): ?int
    {
        return $this->blockingAngle;
    }

    public function setBlockingAngle(?int $blockingAngle): self
    {
        $this->blockingAngle = $blockingAngle;

        return $this;
    }

    public function getComboDuration(): ?int
    {
        return $this->comboDuration;
    }

    public function setComboDuration(?int $comboDuration): self
    {
        $this->comboDuration = $comboDuration;

        return $this;
    }

    public function getFollowThrough(): ?float
    {
        return $this->followThrough;
    }

    public function setFollowThrough(?float $followThrough): self
    {
        $this->followThrough = $followThrough;

        return $this;
    }

    public function getHeavyAttackDamage(): ?int
    {
        return $this->heavyAttackDamage;
    }

    public function setHeavyAttackDamage(?int $heavyAttackDamage): self
    {
        $this->heavyAttackDamage = $heavyAttackDamage;

        return $this;
    }

    public function getHeavySlamAttack(): ?int
    {
        return $this->heavySlamAttack;
    }

    public function setHeavySlamAttack(?int $heavySlamAttack): self
    {
        $this->heavySlamAttack = $heavySlamAttack;

        return $this;
    }

    public function getHeavySlamRadialDamage(): ?int
    {
        return $this->heavySlamRadialDamage;
    }

    public function setHeavySlamRadialDamage(?int $heavySlamRadialDamage): self
    {
        $this->heavySlamRadialDamage = $heavySlamRadialDamage;

        return $this;
    }

    public function getHeavySlamRadius(): ?int
    {
        return $this->heavySlamRadius;
    }

    public function setHeavySlamRadius(?int $heavySlamRadius): self
    {
        $this->heavySlamRadius = $heavySlamRadius;

        return $this;
    }

    public function getAttackRange(): ?float
    {
        return $this->AttackRange;
    }

    public function setAttackRange(?float $AttackRange): self
    {
        $this->AttackRange = $AttackRange;

        return $this;
    }

    public function getSlamAttack(): ?int
    {
        return $this->slamAttack;
    }

    public function setSlamAttack(?int $slamAttack): self
    {
        $this->slamAttack = $slamAttack;

        return $this;
    }

    public function getSlamRadialDamage(): ?int
    {
        return $this->slamRadialDamage;
    }

    public function setSlamRadialDamage(?int $slamRadialDamage): self
    {
        $this->slamRadialDamage = $slamRadialDamage;

        return $this;
    }

    public function getSlamRadius(): ?int
    {
        return $this->slamRadius;
    }

    public function setSlamRadius(?int $slamRadius): self
    {
        $this->slamRadius = $slamRadius;

        return $this;
    }

    public function getSlideAttack(): ?int
    {
        return $this->slideAttack;
    }

    public function setSlideAttack(?int $slideAttack): self
    {
        $this->slideAttack = $slideAttack;

        return $this;
    }

    public function getStancePolarity(): ?string
    {
        return $this->stancePolarity;
    }

    public function setStancePolarity(?string $stancePolarity): self
    {
        $this->stancePolarity = $stancePolarity;

        return $this;
    }

    public function getWindUp(): ?float
    {
        return $this->windUp;
    }

    public function setWindUp(?float $windUp): self
    {
        $this->windUp = $windUp;

        return $this;
    }

    public function getDrops(): array
    {
        return $this->drops;
    }

    public function setDrops(?array $drops): self
    {
        $this->drops = $drops;

        return $this;
    }

    public function isExcludeFromCodex(): ?bool
    {
        return $this->excludeFromCodex;
    }

    public function setExcludeFromCodex(?bool $excludeFromCodex): self
    {
        $this->excludeFromCodex = $excludeFromCodex;

        return $this;
    }
}
