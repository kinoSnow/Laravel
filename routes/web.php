<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\introductionController;
use App\Http\Controllers\portfolioController;
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

Route::get('/', function () {
    return view('introduction');
});

Route::get('create', [HelloController::class, 'create']);
Route::get('introduction', [HelloController::class, 'introduction']);
Route::get('portfolio', [HelloController::class, 'portfolio']);

Route::post('store', [HelloController::class, 'store']);

Route::get('index', [HelloController::class, 'index']);

Route::get('/edit/{contact}', [HelloController::class, 'edit'])->name('edit');

Route::patch('/update/{contact}', [HelloController::class, 'update'])->name('update');

Route::get('/delete/{contact}', [HelloController::class, 'destroy'])->name('destroy');


