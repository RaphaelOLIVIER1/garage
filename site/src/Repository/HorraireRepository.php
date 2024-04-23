<?php

namespace App\Repository;

use App\Entity\Horraire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Horraire>
 *
 * @method Horraire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Horraire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Horraire[]    findAll()
 * @method Horraire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HorraireRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Horraire::class);
        // $horraireBD = $this->getDoctrine()->getRepository(Horraire::class)->find(1);
    }


    // public function truncateTable()
    // {
    //     $em = $this->getEntityManager();
    //     $dql = 'TRUNCATE TABLE UserBundle:User';
    //     $query = $em->createQuery($dql);

    //     return $query->getResult();
    // }
    //    /**
    //     * @return Horraire[] Returns an array of Horraire objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Horraire
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
