<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
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
     * @ORM\Column(type="string", length=255)
     */
    private $food_group;

    /**
     * @ORM\Column(type="integer")
     */
    private $food_group_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $food_subgroup;

    /**
     * @ORM\Column(type="integer")
     */
    private $food_subgroup_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status;

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

    public function getFoodGroup(): ?string
    {
        return $this->food_group;
    }

    public function setFoodGroup(string $food_group): self
    {
        $this->food_group = $food_group;

        return $this;
    }

    public function getFoodGroupId(): ?int
    {
        return $this->food_group_id;
    }

    public function setFoodGroupId(int $food_group_id): self
    {
        $this->food_group_id = $food_group_id;

        return $this;
    }

    public function getFoodSubgroup(): ?string
    {
        return $this->food_subgroup;
    }

    public function setFoodSubgroup(string $food_subgroup): self
    {
        $this->food_subgroup = $food_subgroup;

        return $this;
    }

    public function getFoodSubgroupId(): ?int
    {
        return $this->food_subgroup_id;
    }

    public function setFoodSubgroupId(int $food_subgroup_id): self
    {
        $this->food_subgroup_id = $food_subgroup_id;

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
}
