<?php

use App\Http\Controllers\StarController;
use Illuminate\Http\Request;
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

Route::controller(StarController::class)->group(function () {
    Route::post('storeStar', 'store');
    Route::get('getAllStar', 'index');
    Route::get('getStarByID/{id}', 'show');
    Route::delete('deleteStar/{id}', 'destroy');
    Route::put('updateStar/{id}', 'update');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
