<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('/')->namespace('Api')->name('api.')->group(function () {
    Route::prefix('mini-program')->group(function () {
        Route::any('login', 'MiniProgramController@login');
        Route::any('debug-login/{userid}', 'MiniProgramController@debugLogin');
        //Route::get('unlimit-qrcode', 'MiniProgramController@getUnlimitQrCode');
        //Route::get('config', 'MiniProgramController@config');
        //Route::post('decrypt-data', 'MiniProgramController@decryptData')->middleware('auth:api');
    });

    Route::apiResource('banner', 'BannerController');

    Route::prefix('contract')->group(function () {
        Route::get('status', 'ContractController@getStatus');
        Route::get('status-count', 'ContractController@getStatusCount');
        Route::post('confirm/{contract}', 'ContractController@confirm');
        Route::post('sign', 'ContractController@sign');
    });

    Route::apiResource('contract', 'ContractController')
        ->middleware('auth:api')
        ->except('getStatus', 'getStatusCount');

    Route::apiResource('contract-template', 'ContractTemplateController');
    Route::apiResource('contract-file', 'ContractFileController');

    Route::prefix('order')->group(function () {
        Route::middleware('auth:api')->group(function () {
            Route::post('', 'OrderController@store');
            Route::post('repay/{orderid}', 'OrderController@reStore');
            Route::post('cancel/{orderid}', 'OrderController@cancel');
        });
        Route::any('notify/{channel}', 'OrderController@notify')->name('order.notify');
        Route::any('refund/{channel}', 'OrderController@refund')->name('order.refund');
    });

    Route::prefix('user')->group(function () {
        Route::group(['middleware' => 'auth:api'], function() {
            Route::post('send-code', 'UserController@sendCode');
            Route::post('bind-mobile', 'UserController@bindMobile');
            Route::get('info', 'UserController@info');
        });
    });
    Route::middleware('auth:api')->group(function () {
        Route::apiResource('user-address', 'UserAddressController');
        Route::apiResource('user-sign', 'UserSignController');

        Route::prefix('user-real-name')->group(function () {
            Route::get('', 'UserRealNameController@show');
            Route::post('', 'UserRealNameController@store');
            Route::put('', 'UserRealNameController@update');
            Route::delete('', 'UserRealNameController@destroy');
            Route::post('confirm', 'UserRealNameController@confirm');
            Route::get('cancel', 'UserRealNameController@cancel');
        });
        //Route::apiResource('user-real-name', 'UserRealNameController');
    });
});