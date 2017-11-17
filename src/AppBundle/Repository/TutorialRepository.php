<?php


namespace AppBundle\Repository;
use AppBundle\Entity\Tutorial;


/**
 * Class TutorialRepository
 * @package AppBundle\Repository
 */
class TutorialRepository extends BaseRepository
{

    /**
     * @return array
     */
    public function getFeaturedTutorials()
    {
        $qb = $this->createQueryBuilder(Tutorial::ALIAS);

        $qb->setMaxResults(3);

        return $qb->getQuery()->getResult();
    }
}