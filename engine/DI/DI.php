<?php

namespace Engine\DI;

class DI
{
    private $container = [];

    public function set($key, $value)
    {
        $this->container[$key] = $value;

        return $this;
    }

    public function get($key)
    {
        return $this->container[$key];
    }

    public function has($key)
    {
        return isset($this->container[$key]);
    }
}
