<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;

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
//     return view('welcomewelcomewelcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/post', [PagesController::class, 'post'])->name('post');
Route::get('/get', [PagesController::class, 'contact'])->name('contact');
Route::get('/show/{slug}', [PagesController::class, 'show'])->name('post.show');

Route::group(['prefix' => 'admin'], function(){
	//admin login routes
	

	Route::get('/create', [PostController::class, 'create'])->name('post.create');
	Route::post('/store', [PostController::class, 'store'])->name('post.store');
	Route::get('/edit/{slug}', [PostController::class, 'edit'])->name('post.edit');
	Route::post('/update/{slug}', [PostController::class, 'update'])->name('post.update');
	Route::post('/delete/{slug}', [PostController::class, 'delete'])->name('post.delete');


}); 

Auth::routes();

// Route::get('/login', [ LoginController::class, 'showLoginForm'])->name('login');
// 	Route::post('/login/submit', [ LoginController::class, 'login'])->name('login.submit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
