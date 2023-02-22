<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/article/{id}', [PageController::class,'article']);

// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/article/{id}', [ArticleController::class,'article']);


//praktikum 3

Route::get('/', function (){
    echo  '<center>Ini adalah Halaman Dashboard Situs Lorem Ipsum</center>';
});

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', function (){
        echo  'ini adalah halaman marbel edu games';
    });
    Route::get('/marbel-and-friends-kids-games', function (){
        echo  'ini adalah halaman marbel and friends kids games';
    });
    Route::get('/riri-story-book', function (){
        echo  'ini adalah halaman riri story book';
    });
    Route::get('/kolak-kids-songs', function (){
        echo  'ini adalah halaman kolak kids songs';
    });
});

Route::get('/news/{param?}', function ($param=''){
    if ($param=='') {
        echo 'ini adalah tampilan awal dari halaman news yang tidak membuka sebuah artikel';
    } else {
        echo 'ini adalah halaman berita untuk artikel '.$param;
    }
    
});

Route::prefix('program')->group(function(){
    Route::get('/karir', function (){
        echo  'ini adalah halaman karir';
    });
    Route::get('/magang', function (){
        echo  'ini adalah halaman magang';
    });
    Route::get('/kunjungan-industri', function (){
        echo  'ini adalah halaman kunjungan industri';
    });
});

Route::get('/about-us', function () {
    echo 'ini adalah halaman yang menjelaskan profile dari perusahaan Lorem Ipsum';
});

Route::resource('contact-us', ContactController::class);