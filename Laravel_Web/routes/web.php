<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\DurationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');


    Route::get('pesanan',[OrderController::class, 'showAllOrder'])->name('pesanan');

    Route::get('laporan', function () {
        return view('report-pages.laporan');
    })->name('laporan');

    Route::get('pengaturan-akun', function () {
        return view('settings-pages.pengaturan-akun');
    })->name('pengaturan-akun');

    // Route::get('pengaturan-kasir', function () {
    //     return view('settings-pages.pengaturan-kasir');
    // })->name('pengaturan-kasir');

    // Manajemen Kasir
    Route::get('pengaturan-kasir', [KasirController::class, 'index'])->name('pengaturan-kasir');
    Route::post('addKasir', [KasirController::class, 'create'])->name('addKasir');
    Route::post('editKasir', [KasirController::class, 'edit'])->name('editKasir');
    Route::get('deleteKasir/{id}', [KasirController::class, 'delete'])->name('deleteKasir');


    //Manajemen Parfum
    Route::get('pengaturan-parfum', [ParfumController::class, 'index'])->name('pengaturan-parfum');
    Route::post('addParfum', [ParfumController::class, 'create'])->name('addParfum');
    Route::post('editParfum', [ParfumController::class, 'edit'])->name('editParfum');
    Route::get('deleteParfum/{id}', [ParfumController::class, 'delete'])->name('deleteParfum');


    // Manajemen Durasi
    Route::get('pengaturan-durasi', [DurationController::class, 'index'])->name('pengaturan-durasi');
    Route::post('addDuration', [DurationController::class, 'create'])->name('addDuration');
    Route::post('editDuration', [DurationController::class, 'edit'])->name('editDuration');
    Route::get('deleteDuration/{id}', [DurationController::class, 'delete'])->name('deleteDuration');

    // Manajemen Diskon
    Route::get('pengaturan-diskon', [DiskonController::class, 'index'])->name('pengaturan-diskon');
    Route::post('addDiscount', [DiskonController::class, 'create'])->name('addDiscount');
    Route::post('editDiscount', [DiskonController::class, 'edit'])->name('editDiscount');
    Route::get('deleteDiscount/{id}', [DiskonController::class, 'delete'])->name('deleteDiscount');

    // Manajemen Layanan
    Route::get('pengaturan-layanan', [LayananController::class, 'index'])->name('pengaturan-layanan');
    Route::post('addLayanan', [LayananController::class, 'create'])->name('addLayanan');
    Route::post('editLayanan/{id}', [LayananController::class, 'edit'])->name('editLayanan');
    Route::get('deleteLayanan/{id}', [LayananController::class, 'delete'])->name('deleteDiskon');

    // Manajemen Pelanggan
    Route::get('pengaturan-pelanggan', [PelangganController::class, 'index'])->name('pengaturan-pelanggan');
    Route::post('addPelanggan', [PelangganController::class, 'create'])->name('addPelanggan');
    Route::post('editPelanggan', [PelangganController::class, 'edit'])->name('editPelanggan');
    Route::get('deletePelanggan/{id}', [PelangganController::class, 'delete'])->name('deleteDiskon');

    // Manajemen Pesanan


    Route::post('tambah-kasir', function() {
        return response('test');
    })->name('tambah-kasir');





    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});


Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::post('/session', [SessionsController::class, 'store']);
Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

Route::post('/handle-login', [AuthController::class, 'handleLogin']);


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    // Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});
