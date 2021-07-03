<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"product:read", "recipe: read"}},
 *     denormalizationContext={"groups"={"product: write"}}
 * )
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"product:read", "product: write"})
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product:read", "recipe: read", "product: write"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"product:read", "product: write"})
     */
    private $pictureFileName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product:read", "product: write"})
     */
    private $foodGroup;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"product:read", "product: write"})
     */
    private $foodGroupId;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product:read", "product: write"})
     */
    private $foodSubgroup;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"product:read", "product: write"})
     */
    private $foodSubgroupId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"product:read", "product: write"})
     */
    private $status;

    /**
     * @ORM\ManyToMany(targetEntity=Recipe::class, inversedBy="products")
     * 
     * @Groups({"product:read"})
     * @ApiSubresource
     * 
     */
    private $recipes;

    public function __construct()
    {
        $this->recipes = new ArrayCollection();
       /*  $this->recipe = new ArrayCollection(); */
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPictureFileName(): ?string
    {
        return $this->pictureFileName;
    }

    public function setPictureFileName(?string $pictureFileName): self
    {
        $this->pictureFileName = $pictureFileName;

        return $this;
    }

    public function getFoodGroup(): ?string
    {
        return $this->foodGroup;
    }

    public function setFoodGroup(string $foodGroup): self
    {
        $this->foodGroup = $foodGroup;

        return $this;
    }

    public function getFoodGroupId(): ?int
    {
        return $this->foodGroupId;
    }

    public function setFoodGroupId(int $foodGroupId): self
    {
        $this->foodGroupId = $foodGroupId;

        return $this;
    }

    public function getFoodSubgroup(): ?string
    {
        return $this->foodSubgroup;
    }

    public function setFoodSubgroup(string $foodSubgroup): self
    {
        $this->foodSubgroup = $foodSubgroup;

        return $this;
    }

    public function getFoodSubgroupId(): ?int
    {
        return $this->foodSubgroupId;
    }

    public function setFoodSubgroupId(int $foodSubgroupId): self
    {
        $this->foodSubgroupId = $foodSubgroupId;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|Recipe[]
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }
    /* public function getRecipe(): Collection
    {
        return $this->recipe;
    }*/

    public function addRecipe(Recipe $recipe): self
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes[] = $recipe;
        }

        return $this;
    }

    public function removeRecipe(Recipe $recipe): self
    {
        $this->recipes->removeElement($recipe);

        return $this;
    }
}
