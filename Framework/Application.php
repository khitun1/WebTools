<?php

namespace Framework;
include_once PATH_TO_MODELS.'Router.php';

class Application
{

    private Router $router;


    public function __construct(Router $router)
    {
        require "app/routes.php";
        $this->router = $router;
    }


    public function run(): void
    {
        echo print_r($this->router->getContent(), true);
    }
}