<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('coba', [ApiController::class,'index']);
Route::get('positif', [ApiController::class,'positifglobal']);
Route::get('indonesia', [ApiController::class,'indonesia']);
Route::get('global', [ApiController::class,'global']);
Route::get('indonesia/provinsi', [ApiController::class,'sumProvinsi']);
Route::get('indonesia/kota', [ApiController::class,'sumKota']);
Route::get('indonesia/kecamatan', [ApiController::class,'sumKecamatan']);
Route::get('indonesia/kelurahan', [ApiController::class,'sumKelurahan']);
Route::get('indonesia/provinsi/{id}', [ApiController::class,'getProvinsi']);
