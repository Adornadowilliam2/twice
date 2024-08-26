<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\BladeUserController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});




Route::get('/register', [BladeUserController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [BladeUserController::class, 'register'])->name('register');
Route::get('/users', [BladeUserController::class, 'showUserList'])->name('users.list');
Route::get('/users/edit/{id}', [BladeUserController::class, 'showEditForm'])->name('users.edit');
Route::post('/users/update/{id}', [BladeUserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [BladeUserController::class, 'delete'])->name('users.delete');
