<?php

namespace App\Repository;

use App\Entity\ProfileProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfileProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfileProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfileProduct[]    findAll()
 * @method ProfileProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfileProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfileProduct::class);
    }

    // /**
    //  * @return ProfileProduct[] Returns an array of ProfileProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProfileProduct
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
