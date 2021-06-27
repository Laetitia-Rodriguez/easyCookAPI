<?php

namespace App\Repository;

use App\Entity\ProfileRecipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfileRecipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfileRecipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfileRecipe[]    findAll()
 * @method ProfileRecipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfileRecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfileRecipe::class);
    }

    // /**
    //  * @return ProfileRecipe[] Returns an array of ProfileRecipe objects
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
