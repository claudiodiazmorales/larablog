<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Web\BlogController;

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


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);

});

Route::group(['prefix' => 'blog'], function () {
    Route::controller(BlogController::class)->group(function(){
        Route::get('/', 'index')->name('web.blog.index');
        Route::get('/{post}', 'show')->name('web.blog.show');

    });
});

require __DIR__.'/auth.php';
