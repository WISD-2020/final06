<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Routing\Router;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\PostController;
use App\Admin\Controllers\ProductController;
use App\Admin\Controllers\MessageController;
use App\Admin\Controllers\VisitsController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
],
    function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    /*使用者*/
    Route::get('/users',[UserController::class, 'index']);
    Route::get('/users/create',[UserController::class, 'create']);
    Route::get('/users/{id}/edit',[UserController::class, 'edit']);
    Route::get('/users/{id}',[UserController::class, 'show']);
    Route::post('posts',[UserController::class, 'store']);
    Route::post('admin/users', 'Admin\Controllers\UserController@index');
    Route::resource('admin/user', 'Admin\Controllers\UserController', ['except' => ['index']]);

    /***產品*/
    Route::get('/products',[ProductController::class, 'index']);
    Route::get('/products/create',[ProductController::class, 'create']);
    Route::get('/products/{id}/edit',[ProductController::class, 'edit']);
    Route::get('/products/{id}',[ProductController::class, 'show']);

    /**留言*/
    Route::get('/messages',[MessageController::class, 'index']);
    Route::get('/messages/create',[MessageController::class, 'create']);
    Route::get('/messages/{id}/edit',[MessageController::class, 'edit']);
    Route::get('/messages/{id}',[MessageController::class, 'show']);

    /***預約參訪**/
    Route::get('/visits',[VisitsController::class, 'index']);





});
