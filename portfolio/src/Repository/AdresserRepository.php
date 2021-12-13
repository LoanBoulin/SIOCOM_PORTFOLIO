<?php

namespace App\Repository;

use App\Entity\Adresser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adresser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adresser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adresser[]    findAll()
 * @method Adresser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdresserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adresser::class);
    }

    // /**
    //  * @return Adresser[] Returns an array of Adresser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Adresser
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
