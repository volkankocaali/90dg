<?php

namespace App\Http\Controllers;

use App\Http\Libraries\MethodManager;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $inputArray = [[1, 2, 3 ,4 ], [ 5, 6,7,8], [9,10,11,12] , [13,14,15,16]];
        $make = MethodManager::rotate($inputArray);
        print_r($make); die();
    }
}
