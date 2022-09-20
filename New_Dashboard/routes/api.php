<?php
header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type,Accept, Access-Control-Requested-Method, Authorization');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
?>

<?php

use App\Http\Controllers\API\ApiFooterController;
use App\Http\Controllers\API\ApiLayananController;
use App\Http\Controllers\API\ApiProyekController;
use App\Http\Controllers\API\ApiSpesialisasiKamiController;
use App\Http\Controllers\API\ApiTentangKamiController;
use App\Http\Controllers\API\ApiCarouselController;
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





Route::prefix('tentang_kami')->group(function () {
    Route::controller(ApiTentangKamiController::class)->group(function () {
        Route::get('', 'index');
    });
});



Route::prefix('layanan')->group(function () {
    Route::controller(ApiLayananController::class)->group(function () {
        Route::get('', 'index');
    });
});


Route::prefix('proyek')->group(function () {
    Route::controller(ApiProyekController::class)->group(function () {
        Route::get('', 'index');
    });
});



Route::prefix('spesialisasi')->group(function () {
    Route::controller(ApiSpesialisasiKamiController::class)->group(function () {
        Route::get('', 'index');
    });
});



Route::prefix('footer')->group(function () {
    Route::controller(ApiFooterController::class)->group(function () {
        Route::get('', 'index');
    });
});



Route::prefix('carousel')->group(function () {
    Route::controller(ApiCarouselController::class)->group(function () {
        Route::get('', 'index');
    });
});
