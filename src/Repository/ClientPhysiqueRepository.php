<?php

namespace App\Repository;

use App\Entity\ClientPhysique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientPhysique|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientPhysique|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientPhysique[]    findAll()
 * @method ClientPhysique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientPhysiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientPhysique::class);
    }

    // /**
    //  * @return ClientPhysique[] Returns an array of ClientPhysique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientPhysique
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
