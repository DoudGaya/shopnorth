<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;




//fronend action routes
Route::get('/', [FrontEndController::class, 'home']);


// auth action routes dashboardcontroller
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');

// chatcontroller action routes
Route::middleware(['auth:sanctum', 'verified'])->get( '/chat/rooms', [ChatController::class, 'rooms']);
Route::middleware(['auth:sanctum', 'verified'])->get( '/chat/room/{roomId}/messages', [ChatController::class, 'messages']);
Route::middleware(['auth:sanctum', 'verified'])->post( '/chat/room/{roomId}/message', [ChatController::class, 'newMessage']);
