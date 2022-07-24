<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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

Route::post('login', [UserController::class, 'loginAPI']);

Route::get('getbooks', [BookController::class, 'getBooks']);
Route::post('addbook', [BookController::class, 'addBook']);
Route::post('update/{id}', [BookController::class, 'updateBook']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
