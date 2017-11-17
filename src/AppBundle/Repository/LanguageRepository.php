<?php


namespace AppBundle\Repository;

use AppBundle\Entity\Framework;
use AppBundle\Entity\Language;
use Doctrine\ORM\Mapping;

/**
 * Class LanguageRepository
 * @package AppBundle\Repository
 */
class LanguageRepository extends BaseRepository
{

    /**
     * @return array
     */
    public function getAllLanguagesWithFrameworks()
    {
        $qb = $this->createQueryBuilder(Language::ALIAS);
        $qb->select(Language::ALIAS, Framework::ALIAS)
            ->leftJoin(Language::ALIAS . '.frameworks', Framework::ALIAS);

        return $qb->getQuery()->getResult();
    }
}