<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/register", [App\Http\Controllers\UserController::class, "register" ]);
Route::get("/retrieve", [App\Http\Controllers\UserController::class, "retrieve" ]);
Route::post("/update", [App\Http\Controllers\UserController::class, "update" ]);
Route::post("/delete", [App\Http\Controllers\UserController::class, "delete" ]);