<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\ProductController;
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
],
    function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    Route::get('/users',[UserController::class, 'index']);
    Route::get('/users/create',[UserController::class, 'create']);
    Route::get('/users/{id}/edit',[UserController::class, 'edit']);
    Route::get('/users/{id}',[UserController::class, 'show']);

    Route::get('/products',[ProductController::class, 'index']);
    Route::get('/products/create',[ProductController::class, 'create']);
    Route::post('/products','ProductController@store')->name('product.store');
    Route::get('/products/{id}/edit',[ProductController::class, 'edit']);
    Route::get('/products/{id}',[ProductController::class, 'show']);


});
