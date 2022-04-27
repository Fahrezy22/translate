<?php

use App\Http\Controllers\TranslateController;
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

Route::resource('sentence', TranslateController::class )
->except('create', 'show', 'update', 'destroy');
Route::post('sentence/update', [TranslateController::class, 'update'])->name('sentence.update');
Route::post('sentence/destroy', [TranslateController::class, 'destroy'])->name('sentence.destroy');
Route::get('/',[TranslateController::class, 'kamus'])->name('translate');
Route::get('search', [TranslateController::class, 'search'])->name('sentence.search');