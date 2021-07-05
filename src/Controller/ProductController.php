<?php
namespace App\Controller;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController

{
    /**
     * Get food_groups
     * 
     * @Route("/api/products/groups", name="groups_list", methods="GET")
     */
    public function listGroups(ProductRepository $productRepository) {
            $foodGroups = $productRepository->findAllGroups();
            return $this->json($foodGroups, Response::HTTP_OK, [], ['groups' => 'product:read']);
    }
} 