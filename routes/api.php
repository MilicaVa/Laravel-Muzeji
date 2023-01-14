<?php

use App\Http\Controllers\AutentifikacijaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuzejKontroler;
use App\Http\Controllers\UmetnikKontroler;

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


Route::post('registracija', [AutentifikacijaController::class, 'registracija']);
Route::post('login', [AutentifikacijaController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AutentifikacijaController::class, 'logout']);
    Route::put('umetnik/{id}', [UmetnikKontroler::class, 'update']);
    Route::delete('muzej/{id}', [MuzejKontroler::class, 'destroy']);
});


Route::get('muzej', [MuzejKontroler::class, 'index']);
Route::get('muzej/{id}', [MuzejKontroler::class, 'show']);
Route::get('umetnik', [UmetnikKontroler::class, 'index']);
Route::get('umetnik/{id}', [UmetnikKontroler::class, 'show']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
