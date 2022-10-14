<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/bank-type', [HomeController::class, 'banktype'])->name('banktype');
Route::get('/typequestion/{bankId}/{slug}', [HomeController::class, 'typequestion'])->name('typequestion');
Route::get('/question/{bankId}/{type}', [HomeController::class, 'question'])->name('question');
Route::get('home/export/', [HomeController::class, 'export'])->name('home.export');
