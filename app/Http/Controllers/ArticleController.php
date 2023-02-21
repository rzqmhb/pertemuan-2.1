<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //praktikum 2

    public function article($id){
        return 'ini adalah artikel ke '.$id;
    }
}
