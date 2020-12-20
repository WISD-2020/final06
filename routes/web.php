<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/history',[\App\Http\Controllers\HistoryController::class,'index'])->name('history.index');//美術館歷史
Route::get('/internal',[\App\Http\Controllers\InternalController::class,'index'])->name('internal.index');//美術館內部樓層
Route::get('/external',[\App\Http\Controllers\ExternalController::class,'index'])->name('external.index');//美術館周遭景點

Route::get('/ways',[\App\Http\Controllers\WaysController::class,'index'])->name('ways.index');//參訪路線
Route::get('/way1',[\App\Http\Controllers\Way1Controller::class,'index'])->name('way1.index');//參訪路線1
Route::get('/way2',[\App\Http\Controllers\Way2Controller::class,'index'])->name('way2.index');//參訪路線2
Route::get('/way3',[\App\Http\Controllers\Way3Controller::class,'index'])->name('way3.index');//參訪路線3

