<?php
namespace Configuration;

interface ParametersInterface
{
    /**
     * Get parameter
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Set parameter
     *
     * @param string|int $key
     * @param mixed      $value
     */
    public function set($key, $value);
}