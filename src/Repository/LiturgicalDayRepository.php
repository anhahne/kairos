<?php

namespace App\Repository;

use App\Entity\LiturgicalDay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LiturgicalDay|null find($id, $lockMode = null, $lockVersion = null)
 * @method LiturgicalDay|null findOneBy(array $criteria, array $orderBy = null)
 * @method LiturgicalDay[]    findAll()
 * @method LiturgicalDay[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiturgicalDayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LiturgicalDay::class);
    }

    // /**
    //  * @return LiturgicalDay[] Returns an array of LiturgicalDay objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LiturgicalDay
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
