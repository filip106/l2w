<?php

namespace AppBundle\Core\Adapter;

/**
 * Class BaseAdapterUtil
 * @package AppBundle\Core\Adapter
 */
abstract class BaseAdapterUtil
{

    /**
     * Gets an array of the possible values.
     *
     * @return array
     */
    protected static function getPossibleValues()
    {
        return (new \ReflectionClass(get_called_class()))->getConstants();
    }

    /**
     * @param string $param
     * @return bool
     */
    public static function isAcceptable($param)
    {
        return in_array($param, self::getPossibleValues());
    }
}