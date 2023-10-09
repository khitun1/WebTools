<?php
define('PATH_TO_MODELS',$_SERVER['DOCUMENT_ROOT'].'/framework/');

include_once PATH_TO_MODELS.'Container.php';

use Framework\Container;

if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


Container::getApp()->run();


die();