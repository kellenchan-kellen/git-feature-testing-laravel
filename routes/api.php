<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/tests')->group(function () {
    Route::get('/feature-1', function () {
        return $this->sendResponse(200, null);
    });
    // For separate-development, separate-main
    Route::get('/feature-3', function () {
        return $this->sendResponse(200, null);
    });
});
