<?php

use App\Http\Controllers\Api\CategorieController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/categories/project_1', [CategorieController::class, 'store']);