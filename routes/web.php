<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    ProfileController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/jenis-usaha', [DashboardController::class, 'jenisUsaha']);
    Route::get('/dashboard/kecamatan', [DashboardController::class, 'kecamatan']);
    Route::get('/dashboard/wilayah', [DashboardController::class, 'wilayah']);
    Route::get('/dashboard/sebaran-jenis-usaha-per-kecamatan', [DashboardController::class, 'sebaranJenisUsahaPerKecamatan']);
    Route::get('/dashboard/sebaran-kecamatan-per-wilayah', [DashboardController::class, 'sebaranKecamatanPerWilayah']);
    Route::get('/dashboard/sebaran-jenis-usaha-per-wilayah', [DashboardController::class, 'sebaranJenisUsahaPerWilayah']);
});

require __DIR__ . '/auth.php';
