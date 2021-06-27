<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfileRecipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ProfileRecipeRepository::class)
 */
class ProfileRecipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $profile_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $recipe_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfileId(): ?int
    {
        return $this->profile_id;
    }

    public function setProfileId(int $profile_id): self
    {
        $this->profile_id = $profile_id;

        return $this;
    }

    public function getRecipeId(): ?int
    {
        return $this->recipe_id;
    }

    public function setRecipeId(int $recipe_id): self
    {
        $this->recipe_id = $recipe_id;

        return $this;
    }
}
