<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::post('/posts', [ApiController::class, 'index']);

Route::post('/login', [ApiController::class, 'userlogin']);

Route::get('/bgmi/ph={key1}&ts={key2}', [ApiController::class, 'bookingGasMiscallItanagar']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
