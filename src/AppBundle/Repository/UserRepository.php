<?php

namespace AppBundle\Repository;
use AppBundle\Entity\L2WUser;


/**
 * Class UserRepository
 * @package AppBundle\Repository
 */
class UserRepository extends BaseRepository
{

    /**
     * @return array
     */
    public function getFeaturedUsers()
    {
        $qb = $this->createQueryBuilder(L2WUser::ALIAS);
        $qb->select(L2WUser::ALIAS);

        $qb->setMaxResults(6);

        return $qb->getQuery()->getResult();
    }
}