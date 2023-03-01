<?php

use App\Http\Controllers\Api\ArticlesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/articles', [ArticlesController::class, 'showArticles']);
Route::get('/articles/{id}', [ArticlesController::class, 'showArticle']);

Route::post('/articles', [ArticlesController::class, 'storeArticle']);
