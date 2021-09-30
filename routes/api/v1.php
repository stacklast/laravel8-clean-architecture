<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('posts')->as('posts:')->group(function(){
    Route::get('/', App\Http\Controllers\Api\v1\Posts\IndexController::class)->name('index'); //api/v1/posts/index
    Route::get('{post:key}', App\Http\Controllers\Api\v1\Posts\ShowController::class)->name('show'); //api/v1/posts/index
});