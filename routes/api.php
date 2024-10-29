<?php

use App\Http\Controllers\OfficeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/offices', [OfficeController::class, 'list']);

Route::post('/offices', [OfficeController::class, 'create']);

Route::patch('/offices/{id}', [OfficeController::class, 'edit']);

Route::delete('/offices/{id}', [OfficeController::class, 'delete']);
