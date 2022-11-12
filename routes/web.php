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
Route::get('/register',"UserController@register")->name('register');
Route::get('/login',"UserController@login")->name("login");
Route::post('/login',"UserController@loggedIn")->name("user.login");
Route::get("/logout","UserController@logout")->name("logout");

Route::middleware("auth")->prefix("user")->group(function(){
    Route::get("/index","UserController@index")->name("user.index");

    Route::middleware('librarian')->prefix("/book")->group(function(){

        Route::get("/new","BookController@new")->name('user.book.new');
        Route::post("/new","BookController@save")->name('user.book.save');
        Route::get("/all","BookController@all")->name('user.book.all');
        Route::get("/{book}/edit","BookController@edit")->name("user.book.edit");
        Route::post("/{book}/edit","BookController@update")->name("user.book.update");
        Route::get('/checkedOut','BookController@checkedOut')->name("user.book.checkedOut");
    });
    Route::middleware('librarian')->group(function(){
        Route::get("/users/all","UserController@all")->name("users.all");
        Route::get('/create',"UserController@create")->name("user.create");
        Route::post('/create',"UserController@store")->name("user.store");
    });
    Route::get('/{user}/profile','UserController@profile')->name("user.profile");
    Route::get('/book/{book}/details',"BookController@details")->name("user.book.details");
    Route::get("/book/{book}/checkIn","BookController@checkIn")->name("user.book.checkIn");
    Route::get("/book/{book}/checkOut","BookController@checkOut")->name("user.book.checkOut");
    Route::get("/availableBooks","UserController@available_books")->name("user.available_books");
    Route::get("/checkedBooks","UserController@checkedBooks")->name("user.checkedBooks");
    Route::get('/upload',"UserController@picture")->name('user.picture');
    Route::post('/upload',"UserController@picture_upload")->name('user.picture.upload');

});