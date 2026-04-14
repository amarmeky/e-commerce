<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 

Route::get('redirect', [HomeController::class, 'redirect']);
Route::get('Products', function () {
    return view('Admin.allProducts');
});
Route::get('createProduct', function () {
    return view('Admin.createProduct');
});
