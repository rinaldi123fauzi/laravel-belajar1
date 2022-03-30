<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('welcome',[
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about',[
        "title" => "About",
        "name" => "Rinaldi",
        "email" => "rinal@gm.com",
        "image" => "minion.jpg"
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);

//halaman single blogs
Route::get('blogs/{blog:slug}', [BlogController::class, 'show']);