<?php

use App\Http\Controllers\Admin\DashoardController;
use App\Http\Controllers\Auth\AuthController;
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
Route::get('/Auth',  [AuthController::class, 'index'])->name('login');
Route::post('/Auth',  [AuthController::class, 'login'])->name('login');

Route::group([
    'middleware' => 'auth'
], function(){
    Route::group([
        'group' => 'Admin'
    ], function(){
        Route::get('/Dashboard', [DashoardController::class, 'index'])->name('dashboard');

        Route::resource('Sentence', TranslateController::class )
        ->except('create', 'show', 'update', 'destroy');
        Route::post('Sentence/update', [TranslateController::class, 'update'])->name('Sentence.update');
        Route::post('Sentence/import', [TranslateController::class, 'import'])->name('Sentence.import');
        Route::post('Sentence/destroy', [TranslateController::class, 'destroy'])->name('Sentence.destroy');
    });

});

Route::get('/',[TranslateController::class, 'kamus'])->name('translate');
Route::get('search', [TranslateController::class, 'search'])->name('Sentence.search');
Route::get('search2', [TranslateController::class, 'search2'])->name('Sentence.search2');
