<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post-list', [RelationController::class, 'getPostsList']);
Route::get('comment-list', [RelationController::class, 'getCommentList']);
Route::post('single-post-single-comment', [RelationController::class, 'store']);
Route::post('single-post-multiple-comment', [RelationController::class, 'commentPost']);
