<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use \Illuminate\Http\Request;
Route::get('/','MerchantController@show', function () {
})->name('listmerchant');


Route::group(['middleware' => ['XSS']], function () {
//    Route::get('/searchMerchant','MerchantController@search', function () {
//    });
    Route::post('searchMerchant','MerchantController@search',function (Request $rq) {});
    Route::get('searchMerchant','MerchantController@pagine',function(){});
    Route::post('addNewMerChant','MerchantController@addNew')->name('addnewmerchant');
});


