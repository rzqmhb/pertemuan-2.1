<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//praktikum 1

// Route::get('/about', function () {
//     echo "nama  : Roziq Mahbubi <br> nim    : 2141720086";
// });

// Route::get('/article/{id?}', function ($id=1) {
//     return 'ini adalah artikel ke '.$id;
// });

//praktikum 2

Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/article/{id}', [PageController::class,'article']);