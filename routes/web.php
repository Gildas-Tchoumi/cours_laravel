<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'showlogin'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login.utilsateurs');
Route::get('/utilisateur/create', [UtilisateurController::class, 'create'])->name('utilisateur.create');
Route::post('/utilisateur/store', [UtilisateurController::class, 'store'])->name('utilisateur.store');


Route::middleware(['auth'])->group( function () {


Route::get('/homepage', function () {
    return view('welcome');
});

Route::get('/dashboard',
 function () 
 { return view('layouts.dashboard');
  
})->name('dashboard');

Route::get('/unites', [UniteController::class, 'index'])->name('unites');
Route::get('/unites/create', [UniteController::class, 'create'])->name('unites.create');
Route::post('/unites/store', [UniteController::class, 'store'])->name('unites.store');
Route::get('/unites/edit/{id}', [UniteController::class, 'edit'])->name('unites.edit');
Route::post('/unites/update/{id}', [UniteController::class, 'update'])->name('unites.update');
Route::get('/unites/delet/{id}', [UniteController::class, 'destroy'])->name('unites.delet');

// Route::resource('unites', UniteController::class);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');


Route::get('/product', [ProductController::class, 'listeprod'])->name('products');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/utilisateur', [UtilisateurController::class, 'index'])->name('utilisateur');
Route::get('/utilisateur/roles/asign/{id}', [UtilisateurController::class, 'Rolesasign'])->name('utilisateur.rolesasign');
Route::post('/utilisateur/roles/asign/{id}', [UtilisateurController::class, 'Rolesutilisateur'])->name('utilisateur.Rolesutilisateur');

Route::get('/roles', [RolesController::class, 'index'])->name('roles');
Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
Route::post('/roles/store', [RolesController::class, 'store'])->name('roles.store');

});