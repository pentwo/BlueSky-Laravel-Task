<?php

use App\Models\Todo;
use App\Http\Controllers\TodoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/greeting', function () {
    return 'Hello World';
});


Route::get('/todos', [TodoController::class, 'index']);

Route::get('/todo/{todo}', [TodoController::class, 'show']);

Route::post('/todo',  [TodoController::class, 'store']);

Route::patch('/todo/{todo}',  [TodoController::class, 'update']);

Route::delete('/todo/{todo}',  [TodoController::class, 'destroy']);

