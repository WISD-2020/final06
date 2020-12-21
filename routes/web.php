<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\Controller;

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

/*Route::get('/', function () {
    return view('home');
});*/
/*Route::get('/web1', function () {
    return view('web1');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home.index');//a
Route::get('/elements',[\App\Http\Controllers\ElementsController::class,'index'])->name('elements.index');//b
Route::get('/generic',[\App\Http\Controllers\GenericController::class,'index'])->name('generic.index');//c

