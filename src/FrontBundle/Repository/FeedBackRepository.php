<?php

namespace FrontBundle\Repository;

use Doctrine\ORM\EntityRepository;
use FrontBundle\Entity\FeedBack;

/**
 * FeedBackRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FeedBackRepository extends EntityRepository
{
    public function getFeedBacks()
    {
        $qb = $this->createQueryBuilder('f')
            ->select('f')
            ->getQuery();

        return $qb;
    }
}
