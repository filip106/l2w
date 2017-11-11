<?php


namespace AppBundle\Core\Adapter;

use AppBundle\Manager\BasicEntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class BasicConverter
 * @package AppBundle\Core\Adapter
 */
abstract class BasicConverter
{
    protected $request;
    protected $manager;
    protected $param;

    /**
     * @param BasicEntityManagerInterface $manager
     * @param Request $request
     * @param string $param
     */
    public function __construct(BasicEntityManagerInterface $manager, Request $request, $param)
    {
        $this->manager = $manager;
        $this->request = $request;
        $this->param = $param;
    }

    /**
     * @return mixed
     */
    public abstract function convert();

}