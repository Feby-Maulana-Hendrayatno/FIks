<?php

// use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HubungiKamiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilPerusahaanController;
use App\Http\Controllers\ProfilUsersController;
use App\Http\Controllers\Tentang_Kami\TentangKamiController;
use App\Http\Controllers\carousel\CarouselController;
use App\Http\Controllers\Footer\FooterController;
use App\Http\Controllers\Layanan\LayananController;
use App\Http\Controllers\Proyek\ProyekController;
use App\Http\Controllers\Spesialisasi_Kami\SpesialisasiKamiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/template", function () {
    return view("/template");
});

Route::prefix("/admin")->group(function () {

    // Login
    Route::group(["middleware" => "guest"], function () {
        Route::get("/login", [LoginController::class, "index"]);
    });

    Route::post("/login", [LoginController::class, "post_login"]);

    Route::group(["middleware" => "autentikasi"], function () {
        // Logout
        Route::get('/logout', [LoginController::class, "logout"]);
        // Dashboard
        Route::get("/dashboard", [DashboardController::class, "dashboard"]);

        // User
        Route::get("/users", [UsersController::class, "index"]);
        Route::resource("/users", UsersController::class);

        // Profil Pribadi
        Route::put("profil_saya/simpan", [ProfilUsersController::class, "simpan"]);
        Route::resource('profil_saya', ProfilUsersController::class);

        // Kategori
        Route::get("/kategori/edit", [KategoriController::class, "edit"]);
        Route::put("/kategori/simpan", [KategoriController::class, "update"]);
        Route::resource("/kategori", KategoriController::class);

        // Profil Perusahaan
        Route::resource("/profil_perusahaan", ProfilPerusahaanController::class);

        // Informasi Login
        Route::get("/informasi_login", [DashboardController::class, "informasi_login"]);

        // // Spesialisasi Kami
        // Route::prefix("spesialisasi_kami")->group(function () {
        //     Route::get("/", [SpesialisasiKamiController::class, "index"]);
        //     Route::get("/add_spesialisasi", [SpesialisasiKamiController::class, "add"]);
        //     Route::post("/add_data", [SpesialisasiKamiController::class, "store"]);
        //     Route::get("/edit", [SpesialisasiKamiController::class, "edit"]);
        //     Route::resource("delete_spesialisasi", SpesialisasiKamiController::class);
        // });


        // Layanan
        Route::get("/layanan/edit", [LayananController::class, "edit"]);
        Route::resource("layanan", LayananController::class);


        // Produk
        Route::get("/proyek/edit", [ProyekController::class, "edit"]);
        Route::resource("proyek", ProyekController::class);


        // Spesialisasi Kami
        Route::get("/spesialisasi_kami/add_spesialisasi", [SpesialisasiKamiController::class, "add"]);
        Route::get("/spesialisasi_kami/edit", [SpesialisasiKamiController::class, "edit"]);
        Route::resource("spesialisasi_kami", SpesialisasiKamiController::class);


        //Carousel
        Route::get("/carousel/add_carousel", [CarouselController::class, "add"]);
        Route::get("/carousel/edit", [CarouselController::class, "edit"]);
        Route::resource("carousel", CarouselController::class);

        // Footer
        Route::get("/footer/edit", [FooterController::class, "edit"]);
        Route::resource("footer", FooterController::class);


        // Tentang Kami
        Route::get("/tentang_kami/edit", [TentangKamiController::class, "edit"]);
        Route::resource("tentang_kami", TentangKamiController::class);



    });
});
