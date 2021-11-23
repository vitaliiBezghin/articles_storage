<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Broadcast\PusherMain;
use App\Http\Controllers\ArticleDetailController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('broadcast')->group(function () {
//     Route::get('/test', [PusherMain::class, 'index']);
// });

Route::apiResource('articles', ArticleController::class);
Route::post('article/details', [ArticleDetailController::class, 'store']);
