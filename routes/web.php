<?php

use App\Http\Controllers\UniteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',
 function () 
 { return view('layouts.dashboard');
  
})->name('dashboard');

Route::get('/unites', [UniteController::class, 'index'])->name('unites');
Route::get('/unites/create', [UniteController::class, 'create'])->name('unites.create');
Route::post('/unites/store', [UniteController::class, 'store'])->name('unites.store');