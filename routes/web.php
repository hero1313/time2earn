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


Route::get('/', function () {
    return redirect('/login');
})->name('login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/deshboard', function () {
        return view('components.timer');
    })->name('timer');
    Route::get('/dashboard', function () {
        return view('components.timer');
    })->name('timer');
    Route::get('/', function () {
        return view('components.timer');
    })->name('timer');
    Route::get('/deposit', function () {
        return view('components.deposit');
    })->name('deposit');
    Route::get('/menu', function () {
        return view('components.menu');
    })->name('menu');
    Route::get('/withdraw', function () {
        return view('components.withdraw');
    })->name('withdraw');
});
