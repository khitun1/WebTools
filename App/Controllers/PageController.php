<?php

namespace App\Controllers;
include_once PATH_TO_MODELS.'Controller.php';
include_once PATH_TO_MODELS.'Request.php';

use Framework\Controller;
use Framework\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return $this->view('home.php', ['user' =>  $request->getUser(), 'message' => $request->getMessage()]);
    }


}