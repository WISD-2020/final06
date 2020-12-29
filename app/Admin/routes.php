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
        Route::resource('users', '\App\Admin\Controllers\UserController');
    /*Route::get('/users',[UserController::class, 'index'])->name('users.index');
    Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
    Route::get('/users/{id}/edit',[UserController::class, 'edit']);
    Route::get('/users/{id}',[UserController::class, 'show']);
    Route::post('/user/store',[UserController::class, 'store'])->name('users.store');*/

    /***產品*/
    Route::get('/products',[ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create',[ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{id}/edit',[ProductController::class, 'edit'])->name('product.edit');
    Route::get('/products/{id}',[ProductController::class, 'show'])->name('product.show');
    Route::patch('/product/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    /**留言*/
    /*Route::get('/messages',[MessageController::class, 'index']);
    Route::get('/messages/create',[MessageController::class, 'create']);
    Route::get('/messages/{id}/edit',[MessageController::class, 'edit']);
    Route::get('/messages/{id}',[MessageController::class, 'show']);*/
    Route::resource('messages','\App\Admin\Controllers\MessageController');

    /***預約參訪**/
    Route::get('/visits',[VisitsController::class, 'index']);

    });




