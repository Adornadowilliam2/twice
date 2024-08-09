<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('/register', 'register');
// Route::post('/register', [UserController::class, 'register'])->name('user.register');

// Route::view('/update', 'update');
// Route::put('/update', [UserController::class, 'update'])->name('user.update');

// Route::view('/delete', 'delete');
// Route::delete('/delete', [UserController::class, 'delete'])->name('user.delete');

// Route::get('/users', [UserController::class, 'retrieve'])->name('user.retrieve');
