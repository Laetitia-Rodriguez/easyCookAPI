<?php

namespace App\Repository;

use App\Entity\UserProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserProduct[]    findAll()
 * @method UserProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserProduct::class);
    }

    // /**
    //  * @return UserProduct[] Returns an array of UserProduct objects
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
