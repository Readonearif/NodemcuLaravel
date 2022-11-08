<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ServeroomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| R Arif Firmansah
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data', [DataController::class, 'index']);
Route::post('data', [DataController::class, 'store']);

Route::get('sroom', [ServeroomController::class, 'index']);
Route::post('sroom', [ServeroomController::class, 'store']);
