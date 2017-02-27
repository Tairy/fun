<?php

/**
 * Created by PhpStorm.
 * User: tairy
 * Date: 2/22/17
 * Time: 6:38 PM
 */
namespace Fun\Kernel;

/**
 * Class Request
 * @package Fun\Kernel
 */
class Request
{
    /**
     * @var string
     */
    private $_method;

    /**
     * @var string
     */
    private $_uri;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->_method = $_SERVER['REQUEST_METHOD'];
        $this->_uri = $_SERVER['REQUEST_URI'];
    }

    /**
     * getUri
     * @return string
     */
    public function getUri()
    {
        return $this->_uri;
    }

    /**
     * getMethod
     * @return string
     */
    public function getMethod()
    {
        return $this->_method;
    }
}