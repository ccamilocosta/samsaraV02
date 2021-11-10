<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/articles', function () {
    return view('articles');
})->middleware(['auth'])->name('articles');


Route::get('/articles', 'ArticleController@showAll')->middleware(['auth'])->name('article');

Route::post('/articles', 'ArticleController@createart')->middleware(['auth'])->name('createart');

Route::get('/articles', 'ArticleController@img_filename')->middleware(['auth'])->name('createart');

Route::get('inc.search', 'ArticleController@search')->name('inc.search');

// Route::get('/search', function(){
    // return view ('search');
    // });
// Route::get('/articles', function () {
    // return view('articles');
// })->name('articles');
// Route::get('articles', 'ArticleController@showAll');

// Route::post('/create', 'ArticleController@create');

// Route::get('/articles/{id}', 'ArticleController@view');  

// Route::delete('/articles/{id}', 'ArticleController@delete');


