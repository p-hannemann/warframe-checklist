<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
class Weapon
{
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $uniqueName = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?bool $tradable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(length: 255)]
    private ?string $productCategory = null;

    #[ORM\Column(nullable: true)]
    private array $patchlogs = [];

    #[ORM\Column(nullable: true)]
    private array $components = [];

    #[ORM\Column(nullable: true)]
    private array $introduced = [];

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $estimatedVaultDate = null;

    #[ORM\Column(nullable: true)]
    private array $polarities = [];

    #[ORM\Column(nullable: true)]
    private array $tags = [];

    #[ORM\Column(nullable: true)]
    private ?bool $vaulted = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $marketCost = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bpCost = null;

    #[ORM\Column(nullable: true)]
    private array $attacks = [];

    #[ORM\Column(nullable: true)]
    private ?int $masteryReq = null;

    #[ORM\Column(nullable: true)]
    private ?int $buildPrice = null;

    #[ORM\Column(nullable: true)]
    private ?int $buildTime = null;

    #[ORM\Column(nullable: true)]
    private ?int $skipBuildTimePrice = null;

    #[ORM\Column(nullable: true)]
    private ?int $buildQuantity = null;

    #[ORM\Column(nullable: true)]
    private ?bool $consumeOnBuild = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $wikiaThumbnail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $wikiaUrl = null;

    #[ORM\Column(nullable: true)]
    private ?float $criticalChance = null;

    #[ORM\Column(nullable: true)]
    private ?float $criticalMultiplier = null;

    #[ORM\Column(nullable: true)]
    private ?int $disposition = null;

    #[ORM\Column(nullable: true)]
    private ?float $fireRate = null;

    #[ORM\Column(nullable: true)]
    private ?float $omegaAttenuation = null;

    #[ORM\Column(nullable: true)]
    private ?float $procChance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $releaseDate = null;

    #[ORM\Column(nullable: true)]
    private ?int $slot = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalDamage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vaultDate = null;

    #[ORM\Column(nullable: true)]
    private array $damagePerShot = [];

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private array $parents = [];

    #[ORM\Column(nullable: true)]
    private ?int $maxLevelCap = null;

    #[ORM\Column(nullable: true)]
    private ?int $itemCount = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUniqueName(): ?string
    {
        return $this->uniqueName;
    }

    public function setUniqueName(?string $uniqueName): self
    {
        $this->uniqueName = $uniqueName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function isTradable(): ?bool
    {
        return $this->tradable;
    }

    public function setTradable(?bool $tradable): self
    {
        $this->tradable = $tradable;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function setProductCategory(string $productCategory): self
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    public function getPatchlogs(): array
    {
        return $this->patchlogs;
    }

    public function setPatchlogs(?array $patchlogs): self
    {
        $this->patchlogs = $patchlogs;

        return $this;
    }

    public function getComponents(): array
    {
        return $this->components;
    }

    public function setComponents(?array $components): self
    {
        $this->components = $components;

        return $this;
    }

    public function getIntroduced(): array
    {
        return $this->introduced;
    }

    public function setIntroduced(?array $introduced): self
    {
        $this->introduced = $introduced;

        return $this;
    }

    public function getEstimatedVaultDate(): ?string
    {
        return $this->estimatedVaultDate;
    }

    public function setEstimatedVaultDate(?string $estimatedVaultDate): self
    {
        $this->estimatedVaultDate = $estimatedVaultDate;

        return $this;
    }

    public function getPolarities(): array
    {
        return $this->polarities;
    }

    public function setPolarities(?array $polarities): self
    {
        $this->polarities = $polarities;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function isVaulted(): ?bool
    {
        return $this->vaulted;
    }

    public function setVaulted(?bool $vaulted): self
    {
        $this->vaulted = $vaulted;

        return $this;
    }

    public function getMarketCost(): ?string
    {
        return $this->marketCost;
    }

    public function setMarketCost(?string $marketCost): self
    {
        $this->marketCost = $marketCost;

        return $this;
    }

    public function getBpCost(): ?string
    {
        return $this->bpCost;
    }

    public function setBpCost(?string $bpCost): self
    {
        $this->bpCost = $bpCost;

        return $this;
    }

    public function getAttacks(): array
    {
        return $this->attacks;
    }

    public function setAttacks(?array $attacks): self
    {
        $this->attacks = $attacks;

        return $this;
    }

    public function getMasteryReq(): ?int
    {
        return $this->masteryReq;
    }

    public function setMasteryReq(?int $masteryReq): self
    {
        $this->masteryReq = $masteryReq;

        return $this;
    }

    public function getBuildPrice(): ?int
    {
        return $this->buildPrice;
    }

    public function setBuildPrice(?int $buildPrice): self
    {
        $this->buildPrice = $buildPrice;

        return $this;
    }

    public function getBuildTime(): ?int
    {
        return $this->buildTime;
    }

    public function setBuildTime(?int $buildTime): self
    {
        $this->buildTime = $buildTime;

        return $this;
    }

    public function getSkipBuildTimePrice(): ?int
    {
        return $this->skipBuildTimePrice;
    }

    public function setSkipBuildTimePrice(?int $skipBuildTimePrice): self
    {
        $this->skipBuildTimePrice = $skipBuildTimePrice;

        return $this;
    }

    public function getBuildQuantity(): ?int
    {
        return $this->buildQuantity;
    }

    public function setBuildQuantity(?int $buildQuantity): self
    {
        $this->buildQuantity = $buildQuantity;

        return $this;
    }

    public function isConsumeOnBuild(): ?bool
    {
        return $this->consumeOnBuild;
    }

    public function setConsumeOnBuild(?bool $consumeOnBuild): self
    {
        $this->consumeOnBuild = $consumeOnBuild;

        return $this;
    }

    public function getWikiaThumbnail(): ?string
    {
        return $this->wikiaThumbnail;
    }

    public function setWikiaThumbnail(?string $wikiaThumbnail): self
    {
        $this->wikiaThumbnail = $wikiaThumbnail;

        return $this;
    }

    public function getWikiaUrl(): ?string
    {
        return $this->wikiaUrl;
    }

    public function setWikiaUrl(?string $wikiaUrl): self
    {
        $this->wikiaUrl = $wikiaUrl;

        return $this;
    }

    public function getCriticalChance(): ?float
    {
        return $this->criticalChance;
    }

    public function setCriticalChance(?float $criticalChance): self
    {
        $this->criticalChance = $criticalChance;

        return $this;
    }

    public function getCriticalMultiplier(): ?float
    {
        return $this->criticalMultiplier;
    }

    public function setCriticalMultiplier(?float $criticalMultiplier): self
    {
        $this->criticalMultiplier = $criticalMultiplier;

        return $this;
    }

    public function getDisposition(): ?int
    {
        return $this->disposition;
    }

    public function setDisposition(?int $disposition): self
    {
        $this->disposition = $disposition;

        return $this;
    }

    public function getFireRate(): ?float
    {
        return $this->fireRate;
    }

    public function setFireRate(?float $fireRate): self
    {
        $this->fireRate = $fireRate;

        return $this;
    }

    public function getOmegaAttenuation(): ?float
    {
        return $this->omegaAttenuation;
    }

    public function setOmegaAttenuation(?float $omegaAttenuation): self
    {
        $this->omegaAttenuation = $omegaAttenuation;

        return $this;
    }

    public function getProcChance(): ?float
    {
        return $this->procChance;
    }

    public function setProcChance(?float $procChance): self
    {
        $this->procChance = $procChance;

        return $this;
    }

    public function getReleaseDate(): ?string
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?string $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getTotalDamage(): ?int
    {
        return $this->totalDamage;
    }

    public function setTotalDamage(?int $totalDamage): self
    {
        $this->totalDamage = $totalDamage;

        return $this;
    }

    public function getVaultDate(): ?string
    {
        return $this->vaultDate;
    }

    public function setVaultDate(?string $vaultDate): self
    {
        $this->vaultDate = $vaultDate;

        return $this;
    }

    public function getDamagePerShot(): array
    {
        return $this->damagePerShot;
    }

    public function setDamagePerShot(?array $damagePerShot): self
    {
        $this->damagePerShot = $damagePerShot;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getParents(): array
    {
        return $this->parents;
    }

    public function setParents(?array $parents): self
    {
        $this->parents = $parents;

        return $this;
    }

    public function getMaxLevelCap(): ?int
    {
        return $this->maxLevelCap;
    }

    public function setMaxLevelCap(?int $maxLevelCap): self
    {
        $this->maxLevelCap = $maxLevelCap;

        return $this;
    }

    public function getItemCount(): ?int
    {
        return $this->itemCount;
    }

    public function setItemCount(?int $itemCount): self
    {
        $this->itemCount = $itemCount;

        return $this;
    }
}
