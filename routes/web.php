<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\kalkulatorcontroller;
use App\http\controllers\kalkulator3controller;
use App\http\controllers\kalkulator4controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', [kalkulatorController::class, 'index'])->name('kalkulator');
Route::post('/hitung', [kalkulatorController::class, 'store'])->name('hitung');


Route::get('/kalkulator3', [kalkulator3controller::class, 'index'])->name('kalkulator');
Route::post('/hitung3', [kalkulator3controller::class, 'store'])->name('hitung3');

Route::get('/home', [kalkulator4controller::class, 'home'])->name('home');
Route::get('/kalkulator4', [kalkulator4controller::class, 'index'])->name('kalkulator4');
Route::post('/hitung4', [kalkulator4controller::class, 'input'])->name('hitung4');
Route::get('/kalkulatorjs', [kalkulator4Controller::class, 'javascript'])->name('kalkulatorjs');

