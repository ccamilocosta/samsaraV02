<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\Auth\ArticleController;
use App\Http\Controllers\Auth\ContactController;
use App\Http\Controllers\Auth\EmailController;
use App\User;




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

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/articles', function () {
    return view('articles');
})->middleware(['auth'])->name('articles');

// Route::get('/articles', function () {
//     return view('articleDetails');
// })->middleware(['auth'])->name('articleDetails');

require __DIR__.'/auth.php';


Route::get('/acceptRequest', 'ArticleController@newRequest')->middleware(['auth'])->name('acceptRequest');

Route::get('/articles', 'ArticleController@showAll')->middleware(['auth'])->name('articles');

Route::post('/articles', 'ArticleController@createart')->middleware(['auth'])->name('createart');

Route::get('inc.search', 'ArticleController@search')->middleware(['auth'])->name('inc.search');

//Route::post('/dashboard','Controller@upload');

//Route::post('/articles','ArticleController@upload')->middleware(['auth'])->name('articles');;

Route::get('/articles/{id}', 'ArticleController@view')->middleware(['auth'])->name('articleDetails');


Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@mailContactForm');

Route::get('/emails/mail', 'EmailController@show');
Route::post('/emails/mail', 'EmailController@mailContactForm');

Route::get('/search', function(){
    return view ('search');
    });
  

Route::delete('/articles/{id}', 'ArticleController@delete');

