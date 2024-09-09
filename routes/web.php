<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'home'])->name('homepage');

//--SHIRT--
//Route::resource('shirt', ShirtController::class);
Route::get('/', [ShirtController::class, 'index'])->name('shirt.index');
    Route::get('/shirt', [ShirtController::class, 'index'])->name('shirt.index');
    Route::get('/shirt/create', [ShirtController::class, 'create'])->name('shirt.create');
    Route::post('/shirt', [ShirtController::class, 'store'])->name('shirt.store');
    Route::get('/shirt/{id}', [ShirtController::class, 'show'])->name('shirt.show');
    Route::get('/shirt/{id}/edit', [ShirtController::class, 'edit'])->name('shirt.edit');
    Route::put('/shirt/{id}', [ShirtController::class, 'update'])->name('shirt.update');
    Route::delete('/shirt/{id}', [ShirtController::class, 'destroy'])->name('shirt.destroy');

    //--CATEGORY--
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
