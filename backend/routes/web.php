<?php

use App\Http\Controllers\MemoController;

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


Route::get('/', [MemoController::class,'showList']);
Route::post('/createMemo', [MemoController::class,'createMemo']) -> name('title','memo');
Route::get('/createMemo', [MemoController::class,'createMemo']);
Route::post('/createdMemo' , [MemoController::class,'createdMemo']) -> name('title','memo');
Route::get('/deleteMemo', [MemoController::class,'deleteMemo']);
