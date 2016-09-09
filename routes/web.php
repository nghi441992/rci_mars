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
    Route::post('searchMerchant', function (Request $rq) {
        $keyword = $rq->input('keyword');
        $alphabet = $rq->input('alphabet');
        $status = $rq->input('status');
        $products = App\Models\Merchant::searchMerchantByKeyword($keyword,$alphabet,$status);
        return view('ajax.listmerchant',[
            'data'=>$products,
        ]);
    });
    Route::get('getListCountry','CountryController@getList',function(){
        
    })->name('listcountry');
});


