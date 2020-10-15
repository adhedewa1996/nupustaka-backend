<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([ 'prefix' => 'auth' ], function () {
    Route::post('login', 'API\AuthController@login');
    Route::post('signup', 'API\AuthController@signup');

    Route::group([ 'middleware' => 'auth:api' ], function() {
        Route::get('logout', 'API\AuthController@logout');
        Route::get('user', 'API\AuthController@user');
        // Route::post('broadcasting/auth', 'API\AuthController@broaduser');
        Route::post('simpanUser', 'API\AuthController@simpanUser');

        Route::get('categories', 'API\CategoryController@index');
        Route::get('categories/unisma', 'API\CategoryController@categoryUnisma');
        Route::get('categories/unisma/unli', 'API\CategoryController@categoryUnismaUnli');
        Route::get('category/with/books', 'API\BookController@index');

        Route::get('book/detail/{id}', 'API\BookController@show');
        Route::get('book/similar/{id}', 'API\BookController@similarBook');

        Route::get('bookmark/book/{id}', 'API\BookController@postBookmark');
        Route::get('cek/bookmark/book/{id}', 'API\BookController@cekBookmark');

        Route::get('koleksi/book', 'API\BookController@koleksiBook');
        Route::get('koleksi2/book', 'API\BookController@koleksi2Book');

        Route::get('transaction/beli/{id}', 'API\TransactionController@beli');
        Route::get('cek/transaction/beli/{id}', 'API\TransactionController@cekBeli');
        Route::get('get/transaction/beli', 'API\TransactionController@getBeli');
        Route::get('transaction/sewa/{id}', 'API\TransactionController@sewa');
        Route::get('cek/transaction/sewa/{id}', 'API\TransactionController@cekSewa');
        Route::get('get/transaction/sewa', 'API\TransactionController@getSewa');
        Route::get('transaction/pinjam/{id}', 'API\TransactionController@pinjam');
        Route::get('cek/transaction/pinjam/{id}', 'API\TransactionController@cekPinjam');
        Route::get('get/transaction/pinjam', 'API\TransactionController@getPinjam');
        Route::get('get/transaction/all', 'API\TransactionController@getAll');

        Route::get('history/redeem', 'API\VoucherController@history');
        Route::get('voucher/redeem/{id}', 'API\VoucherController@redeem');

        Route::get('books', 'API\SearchController@show');
        Route::get('text', 'API\SearchController@searchText');

        Route::get('display', 'API\DisplayController@index');
        Route::get('display/{id}', 'API\DisplayController@show');
    });
});

// Route::post('register', 'API\RegisterController@register');
// Route::post('login', 'API\RegisterController@login');
