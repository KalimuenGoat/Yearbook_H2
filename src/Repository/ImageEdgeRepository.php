<?php

namespace App\Repository;

use App\Entity\ImageEdge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageEdge>
 *
 * @method ImageEdge|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageEdge|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageEdge[]    findAll()
 * @method ImageEdge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageEdgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageEdge::class);
    }

//    /**
//     * @return ImageEdge[] Returns an array of ImageEdge objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImageEdge
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
