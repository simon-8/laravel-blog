<?php

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

Route::prefix(config('admin.basePath'))->namespace('Admin')->name('admin.')->group(function() {
    Route::match(['get', 'post'], 'login', 'LoginController@index')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::any('ajax' , 'AjaxController@index')->name('ajax.index');

    Route::group(['middleware' => 'auth:admin'], function() {
        // 首页
        Route::get('/', 'IndexController@index')->name('index.index');
        Route::get('main', 'IndexController@main')->name('index.main');

        Route::resource('ad', 'AdController');
        Route::resource('ad-place', 'AdPlaceController');
        Route::resource('menu', 'MenuController');
        Route::resource('manager', 'ManagerController');
        Route::resource('role', 'RoleController');
        Route::resource('role-access', 'RoleAccessController');

        Route::post('user/freeze/{user}', 'UserController@freeze')->name('user.freeze');
        Route::resource('user', 'UserController');

        Route::prefix('company')->group(function() {
            Route::put('sign-free/{company}', 'CompanyController@signFreeUpdate')
                ->where('company', '\d+')
                ->name('company.signFreeUpdate');
        });
        Route::resource('company', 'CompanyController');
        Route::resource('contract', 'ContractController');
        Route::resource('contract-category', 'ContractCategoryController');
        Route::resource('contract-tpl', 'ContractTplController');
        Route::resource('contract-tpl-section', 'ContractTplSectionController');
        //Route::resource('contract-tpl-fill', 'ContractTplFillController');
        //Route::resource('contract-tpl-rule', 'ContractTplRuleController');
        Route::resource('single-page', 'SinglePageController');
        Route::resource('express-fee', 'ExpressFeeController');
        Route::prefix('operation')->group(function() {
            Route::get('order', 'OperationController@order')->name('operation.order');

        });
        Route::resource('order-lawyer-confirm', 'OrderLawyerConfirmController');
        // database
        Route::prefix('database')->group(function() {
            Route::get('/', 'DatabaseController@getIndex')->name('database.index');
            Route::get('/fields', 'DatabaseController@getFields')->name('database.fields');
            Route::get('/repair', 'DatabaseController@getRepair')->name('database.repair');
            Route::get('/optimize', 'DatabaseController@getOptimize')->name('database.optimize');
        });

    });
});
