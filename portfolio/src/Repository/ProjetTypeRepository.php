<?php

namespace App\Repository;

use App\Entity\ProjetType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjetType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjetType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjetType[]    findAll()
 * @method ProjetType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjetType::class);
    }

    // /**
    //  * @return ProjetType[] Returns an array of ProjetType objects
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
    public function findOneBySomeField($value): ?ProjetType
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
