<?php

namespace App\Repository;

use App\Entity\Factuurr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Factuurr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Factuurr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Factuurr[]    findAll()
 * @method Factuurr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactuurrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Factuurr::class);
    }

    // /**
    //  * @return Factuurr[] Returns an array of Factuurr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Factuurr
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
