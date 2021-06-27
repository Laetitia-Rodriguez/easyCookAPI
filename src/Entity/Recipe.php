<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture_file_name;

    /**
     * @ORM\Column(type="string", length=3500)
     */
    private $ingredients_list;

    /**
     * @ORM\Column(type="string", length=3500, nullable=true)
     */
    private $steps;

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
        return $this->picture_file_name;
    }

    public function setPictureFileName(?string $picture_file_name): self
    {
        $this->picture_file_name = $picture_file_name;

        return $this;
    }

    public function getIngredientsList(): ?string
    {
        return $this->ingredients_list;
    }

    public function setIngredientsList(string $ingredients_list): self
    {
        $this->ingredients_list = $ingredients_list;

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
}
