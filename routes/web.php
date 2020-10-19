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

Route::get('/jalaninproses', 'API\BookController@proses');
Route::get('/proses', 'API\BookController@getproses');
Route::get('/asdaasdas', function () {
    // event(new \App\Events\SendMessage());
    dd('Event Run Successfully.');
});
Auth::routes();

Route::get('/admin/category', 'Admin\CategoryController@index');
Route::post('/admin/category/store', 'Admin\CategoryController@store');
Route::get('admin/category/edit/{id}', 'Admin\CategoryController@edit');
Route::post('admin/category/update/{id}', 'Admin\CategoryController@update');
Route::get('admin/category/delete/{id}', 'Admin\CategoryController@delete');

//
Auth::routes();
Route::get('/admin/tentang', 'Admin\TentangController@index');
Route::post('/admin/tentang/store', 'Admin\TentangController@store');
Route::get('admin/tentang/edit/{id}', 'Admin\TentangController@edit');
Route::post('admin/tentang/update/{id}', 'Admin\TentangController@update');
Route::get('admin/tentang/delete/{id}', 'Admin\TentangController@delete');
//

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// roots books started
Auth::routes();

Route::get('/admin/books', 'BooksController@index')->name('books');
Route::get('/admin/JSONbooks', 'BooksController@json');
Route::get('/admin/books/{id}', 'BooksController@edit');
Route::post('/admin/books-update/{id}', 'BooksController@update');
Route::get('/admin/books-delete/{id}', 'BooksController@destroy');
Route::get('/admin/books-create', 'BooksController@create');
Route::post('/admin/books-store', 'BooksController@store');
// roots book ended

// roots user-config started
Auth::routes();

Route::get('/admin/user-config', 'UserConfigController@index')->name('user-config');
Route::get('/admin/JSON-user-config', 'UserConfigController@json');
Route::get('/admin/user-config/{id}', 'UserConfigController@edit');
Route::post('/admin/user-config-update/{id}', 'UserConfigController@update');
Route::post('/admin/user-config-topup/{id}', 'UserConfigController@topup');
Route::get('/admin/user-config-delete/{id}', 'UserConfigController@destroy');
// roots user-config ended

// roots transactions started
Auth::routes();

Route::get('/admin/transactions', 'TransactionsController@index')->name('transactions');
Route::get('/admin/transactions/{id}', 'TransactionsController@edit');
Route::post('/admin/transactions-update/{id}', 'TransactionsController@update');
Route::post('/admin/transactions-topup/{id}', 'TransactionsController@topup');
// roots transactions ended
