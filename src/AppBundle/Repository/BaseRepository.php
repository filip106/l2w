<?php


namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\ORMException;

/**
 * Class BaseRepository
 * @package AppBundle\Repository
 */
class BaseRepository extends EntityRepository
{

    /**
     * @param mixed $entity
     * @throws ORMException
     * @return mixed
     */
    public function save($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();

        return $entity;
    }

    /**
     * @param mixed $entity
     * @throws ORMException
     * @return mixed
     */
    public function update($entity)
    {
        $this->_em->merge($entity);
        $this->_em->flush();

        return $entity;
    }

    /**
     * @param mixed $entity
     * @throws ORMException
     * @return mixed
     */
    public function delete($entity)
    {
        $this->_em->remove($entity);
        $this->_em->flush();

        return $entity;
    }

    /**
     * @param array $entityArray
     * @param int $flushNumber
     * @throws ORMException
     */
    public function saveMultiple($entityArray, $flushNumber = 30)
    {
        $batch = 0;
        foreach ($entityArray as $entity) {
            $this->_em->persist($entity);
            $batch++;
            if ($batch % $flushNumber == 0) {
                $this->_em->flush();
            }
        }
        $this->_em->flush();
    }

    /**
     * @param array $entityArray
     * @param int $flushNumber
     * @throws ORMException
     */
    public function updateMultiple($entityArray, $flushNumber = 30)
    {
        $batch = 0;
        foreach ($entityArray as $entity) {
            $this->_em->merge($entity);
            $batch++;
            if ($batch % $flushNumber == 0) {
                $this->_em->flush();
            }
        }
        $this->_em->flush();
    }

    /**
     * @param array $entityArray
     * @param int $flushNumber
     * @throws ORMException
     */
    public function deleteMultiple($entityArray, $flushNumber = 30)
    {
        $batch = 0;
        foreach ($entityArray as $entity) {
            $this->_em->remove($entity);
            $batch++;
            if ($batch % $flushNumber == 0) {
                $this->_em->flush();
            }
        }
        $this->_em->flush();
    }
}