<?php

namespace App\Repository;

use App\Entity\Idea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Idea|null find($id, $lockMode = null, $lockVersion = null)
 * @method Idea|null findOneBy(array $criteria, array $orderBy = null)
 * @method Idea[]    findAll()
 * @method Idea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdeaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Idea::class);
    }

    /*
         * Delete all elements from BD
         */
    public function removeAllQuery()
    {
        $em = $this->getEntityManager();
        $dql ="DELETE App\Entity\Idea i";
        $query = $em->createQuery($dql);
        return $query->getResult();

    }

    public function findWithCategories()
    {
        $qb = $this->createQueryBuilder('i');
        $qb->andWhere('i.isPublish = true');
        $qb->addOrderBy('i.dateCreated', 'DESC');
        $qb->addSelect('c');
        $qb->setMaxResults(50);

        $qb->join('i.categorie', 'c');
        $query = $qb->getQuery();



        $result = $query->getResult();
        return $result;


    }


    // /**
    //  * @return Idea[] Returns an array of Idea objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Idea
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
