<?php

namespace App\Repository;

use App\Entity\Pock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pock|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pock|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pock[]    findAll()
 * @method Pock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PockRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pock::class);
    }

    // /**
    //  * @return Pock[] Returns an array of Pock objects
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
    public function findOneBySomeField($value): ?Pock
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
