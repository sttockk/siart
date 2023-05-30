<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'article'], function () {
    Route::delete('/{article}', 'ArticleController@delete')->name('article.delete');
    Route::get('/{user}', 'ArticleController@isAuthor');
});

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'user'], function () {
    Route::post('/add', 'UserController@add')->name('user.add');
    Route::get('/experience', 'UserController@getExperience');
});


