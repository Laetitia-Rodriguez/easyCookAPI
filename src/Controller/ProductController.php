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

     /**
     * Get food_subgroups
     * 
     * @Route("/api/products/subgroups", name="subgroups_list", methods="GET")
     */
        public function listSubgroups(ProductRepository $productRepository) {
                $foodSubgroups = $productRepository->findAllSubgroups();
                return $this->json($foodSubgroups, Response::HTTP_OK, [], ['groups' => 'product:read']);
        }

     /**
     * Get products
     * 
     * @Route("/api/products", name="products", methods="GET")
     */
        public function listProducts(ProductRepository $productRepository) {
        $products = $productRepository->findAllProducts();
        return $this->json($products, Response::HTTP_OK, [], ['groups' => 'product:read']);
        }

     /**
     * Update product, status
     * 
     * @Route("/api/products/{selectedFavoriteId}/status", name="products", methods="PUT")
     */
     public function favoriteProduct(ProductRepository $productRepository, $selectedFavoriteId) {
        $favoriteProduct = $productRepository->setFavoriteProduct($selectedFavoriteId);
        return $response = new Response ('Statut changé', Response::HTTP_OK, [], ['groups' => 'product:write']);
        }

     /**
     * Get favorites names products
     * 
     * @Route("/api/products/status", name="favorites_names_products", methods="GET")
     */
    public function listFavoritesNamesProducts(ProductRepository $productRepository) {
        $favoritesNames = $productRepository->findAllFavoritesNamesProducts();
        return $this->json($favoritesNames, Response::HTTP_OK, [], ['groups' => 'product:read']);
        } 

} 