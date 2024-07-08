<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::controller(MessageController::class)->group(function() {
    Route::group(['middleware' => ["auth:sanctum"]], function() {
        Route::get('/messages', 'showAll');
        Route::get('/messages/name/{name}', 'showByName');
        Route::get('/messages/email/{email}', 'showByEmail');
    });
    
    Route::post('/messages/create', 'store');
});

Route::post('/login', [AuthController::class, 'signIn']);