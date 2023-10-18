<?php
namespace Framework;

include_once PATH_TO_MODELS.'Application.php';
include_once PATH_TO_MODELS.'Router.php';
include_once PATH_TO_MODELS.'Request.php';


class Container
{

    public static function getApp(): Application
    {
        return new Application(self::getRouter());
    }


    public static function getRouter(): Router
    {
        return new Router(self::getRequest());
    }


    public static function getRequest(): Request
    {
        return new Request();
    }


}