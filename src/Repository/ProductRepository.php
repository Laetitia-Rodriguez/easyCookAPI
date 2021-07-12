<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    // *@return Groups[] Returns an array of Product objects
    // */

    public function findAllGroups()
    {
        // To SQL instead of Doctrine DQL with Symfony
        $conn = $this->getEntityManager()->getConnection(); 

        $sql=
        "SELECT DISTINCT product.food_group, product.food_group_id
        FROM product
        ORDER BY food_group_id ASC";
        $groups = $conn->executeQuery($sql);
        return $groups ->fetchAllAssociative(\Doctrine\ORM\Query::HYDRATE_ARRAY); 
    }
 
    public function findAllSubgroups()
    {
        // To SQL instead of Doctrine DQL with Symfony
        $conn = $this->getEntityManager()->getConnection(); 

        $sql=
        "SELECT DISTINCT product.food_subgroup, product.food_group_id, product.food_subgroup_id 
        FROM product
        ORDER BY food_subgroup_id ASC";
        $subgroups = $conn->executeQuery($sql);
        return $subgroups ->fetchAllAssociative(\Doctrine\ORM\Query::HYDRATE_ARRAY); 
    }

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
