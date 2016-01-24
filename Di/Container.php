<?php
namespace Di\Container;

/**
 * Dependency injection Container
 */
class Container
{
    protected $container = [];

    public function __construct()
    {

    }

    public function __set($key, $value)
    {
        $this->container[$key] = $value;
    }

    public function __get($value)
    {
        return $this->container[$value]($this);
    }

}