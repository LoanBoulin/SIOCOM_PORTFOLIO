<?php

namespace App\Repository;

use App\Entity\ProjetDef;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjetDef|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjetDef|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjetDef[]    findAll()
 * @method ProjetDef[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetDefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjetDef::class);
    }

    // /**
    //  * @return ProjetDef[] Returns an array of ProjetDef objects
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
    public function findOneBySomeField($value): ?ProjetDef
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
