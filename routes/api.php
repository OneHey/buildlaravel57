<?php
//Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
//
//});
//Route::get('','Admin\PermissionsController@index');

//Route::group(['middleware' => ['auth']], function () {
//
//    Route::resource('products','ProductController');
//
//});

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});