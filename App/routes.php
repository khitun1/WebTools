<?php
use Framework\Route;
use Framework\Router;

include_once PATH_TO_MODELS.'Router.php';
include_once PATH_TO_MODELS.'Route.php';


Router::addRoute(new Route('page/{id}', 'PageController@index', Route::METHOD_GET));
Router::addRoute(new Route('page/{id}/create', 'PageController@index', Route::METHOD_GET));
Router::addRoute(new Route('page/{id}/update/{q}', 'PageController@index', Route::METHOD_GET));
Router::addRoute(new Route('user/{id}', 'UserController@getById', Route::METHOD_GET));
Router::addRoute(new Route('user', 'UserController@index', Route::METHOD_GET));

