<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FotoController;

Route::get('/', function () {
    $fotos = App\Models\Foto::all();
    return view('home', compact('fotos'));
});

// Admin login
Route::get('/admin/login', [AdminController::class, 'loginPage']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

// Admin dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Foto CRUD
Route::get('/admin/foto', [FotoController::class, 'index']);
Route::get('/admin/foto/create', [FotoController::class, 'create']);
Route::post('/admin/foto/store', [FotoController::class, 'store']);
Route::get('/admin/foto/delete/{id}', [FotoController::class, 'delete']);
