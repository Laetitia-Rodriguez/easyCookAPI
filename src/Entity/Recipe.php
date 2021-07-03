<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\RecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 * @ApiResource(
 *      normalizationContext={"groups"={"recipe: read", "product:read"}},
 *      denormalizationContext={"groups"={"recipe:write"}}
 * )
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 * @ApiFilter(SearchFilter::class, properties={"name": "partial", "ingredientsList": "partial", "steps" : "partial"})
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"recipe: read", "recipe: write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"recipe: read", "product:read", "recipe: write"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"recipe: read", "recipe: write"})
     */
    private $pictureFileName;

    /**
     * @ORM\Column(type="string", length=3500)
     * @Groups({"recipe: read", "recipe: write"})
     */
    private $ingredientsList;

    /**
     * @ORM\Column(type="string", length=3500, nullable=true)
     * @Groups({"recipe: read", "recipe: write"})
     */
    private $steps;

    /**
     * @ApiSubresource(maxDepth=1)
     * @ORM\ManyToMany(targetEntity=Product::class, mappedBy="recipes", fetch="EXTRA_LAZY")
     * 
     * @Groups({"recipe: read"})
     * @ApiSubresource
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
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

    public function getIngredientsList(): ?string
    {
        return $this->ingredientsList;
    }

    public function setIngredientsList(string $ingredientsList): self
    {
        $this->ingredientsList = $ingredientsList;

        return $this;
    }

    public function getSteps(): ?string
    {
        return $this->steps;
    }

    public function setSteps(?string $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }


    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->addRecipe($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            $product->removeRecipe($this);
        }

        return $this;
    }
}
