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
Route::redirect('/', '/catalog');
Route::get('/catalog', [App\Http\Controllers\TechLandController::class, 'catalog'])->name('catalog');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/lang', [App\Http\Controllers\TechLandController::class, 'lang'])->name('lang');
Route::get('/create_theme', [App\Http\Controllers\TechLandController::class, 'create_theme_form'])->name('create_theme');
Route::post('/add_lang', [App\Http\Controllers\TechLandController::class, 'add_lang'])->name('add_lang');
Route::get('/theme', [App\Http\Controllers\TechLandController::class, 'theme'])->name('theme');
Auth::routes();
