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



Route::post('/createMemo', [MemoController::class,'createMemo']) -> name('title','memo');
Route::post('/createdMemo' , [MemoController::class,'createdMemo']) -> name('title','memo');
Route::post('/deleteMemo/{id}', [MemoController::class,'deleteMemo']);
Route::post('/editedMemo/{id}', [MemoController::class, 'editedMemo']) -> name('title','memo');
Route::post('/deletedMemo/{id}', [MemoController::class,'deletedMemo']);
Route::get('/', [MemoController::class,'showList']);
Route::get('/createMemo', [MemoController::class,'createMemo']);
Route::get('/main', [MemoController::class, 'main']);

