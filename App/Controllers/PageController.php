<?php

namespace App\Controllers;
include_once PATH_TO_MODELS.'Controller.php';

use Framework\Controller;

class PageController extends Controller
{
    public function index(array $arr)
    {
        //print_r($arr);
        return $this->view('index.php', ['arr' => $arr]);
    }

}