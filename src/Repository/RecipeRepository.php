<?php

namespace App\Repository;

use App\Entity\Recipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Recipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recipe[]    findAll()
 * @method Recipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    // /**
    //  * @return Recipe[] Returns an array of Recipe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Recipe
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @param string $keyword
     *
     * @return array
     */
    public function findByKeyword($keyword)
    {
        return $this->createQueryBuilder('a')
            ->where('a.steps LIKE :keyword')
            ->orWhere('a.name LIKE :keyword')
            ->setParameter('keyword', '%'.$keyword.'%')
            ->getQuery()
            ->getResult()
        ;
    } 

    /**
     * Find recipes by keyword
     * 
     */
    public function findByKeywordDql($keyword)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
        'SELECT a
        FROM App\Entity\Recipe a 
        WHERE a.steps LIKE %:keyword%
        OR a.name LIKE %:keyword%')        
        ->setParameter('keyword', '%'.' '.$keyword.' '.'%');
    
        return $query->getResult();
    }
}
