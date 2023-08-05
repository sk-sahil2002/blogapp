<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    Route::get('category',[App\Http\Controllers\Admin\CategortController::class, 'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategortController::class, 'create']);



});