<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    //     Route::get('/create', [PostController::class, 'create'])->name('post.create');
    // Route::post('/store', [PostController::class, 'store'])->name('post.store');
    // Route::get('/edit/{slug}', [PostController::class, 'edit'])->name('post.edit');
    // Route::post('/update/{slug}', [PostController::class, 'update'])->name('post.update');
    // Route::post('/delete/{slug}', [PostController::class, 'delete'])->name('post.delete');

    });

Route::post("login",[UserController::class,'index']);

