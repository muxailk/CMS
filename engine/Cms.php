<?php

namespace Engine;

class Cms
{
    private $di;
    public $router;

    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    public function run()
    {
        // $this->router->add('home', '/', 'HomeController:index');
        // $this->router->add('product', '/product[id]', 'ProductController:index');
        print_r($this->di);
    }
}
