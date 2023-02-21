<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //praktikum 2

    public function index(){
        return view('welcome');
    }
}
