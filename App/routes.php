<?php
use Framework\Route;
use Framework\Router;

include_once PATH_TO_MODELS.'Router.php';
include_once PATH_TO_MODELS.'Route.php';


Router::addRoute(new Route('logout', 'AuthController@logout', Route::METHOD_GET));
Router::addRoute(new Route('login', 'AuthController@login', Route::METHOD_POST));
Router::addRoute(new Route('user/{id}', 'UserController@getById', Route::METHOD_GET, true));
Router::addRoute(new Route('user', 'UserController@index', Route::METHOD_GET, true));
Router::addRoute(new Route('home', 'PageController@index', Route::METHOD_GET));

