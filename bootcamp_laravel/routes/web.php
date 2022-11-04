<?php

use app\Models\Post;
use app\Models\User;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

Route::get('/dashboard', function (){
    return view('dashboard.index');
});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);

// Route::get('/post', PostController::class . '@index');

Route::get('/latihan', [LatihanController::class, 'showMyname']);

Auth::routes(['/category', CategoryController::class]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
