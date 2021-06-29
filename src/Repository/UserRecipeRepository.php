<?php

namespace App\Repository;

use App\Entity\UserRecipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserRecipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRecipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRecipe[]    findAll()
 * @method UserRecipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRecipe::class);
    }

    // /**
    //  * @return UserRecipe[] Returns an array of UserRecipe objects
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
    public function findOneBySomeField($value): ?ProfileRecipe
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
