<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/',[HomeController::class, 'dashboard'] );
Route::get('/user',[HomeController::class, 'index'] )->name('user.index');
Route::get('/create',[HomeController::class, 'create'])->name('user.create');

Route::post('/store',[HomeController::class, 'store'])->name('user.store');



