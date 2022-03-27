<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;

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


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);

});

require __DIR__.'/auth.php';
