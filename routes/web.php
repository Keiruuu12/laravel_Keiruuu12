<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahsakitController;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return redirect('rumahsakits');
});
Route::get('/', function () {
    return redirect('rumahsakits');
});

Route::resource('rumahsakits', RumahsakitController::class)->middleware('auth');
Route::resource('pasiens', PasienController::class)->middleware('auth');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('delete-pasien/{id}', [PasienController::class, 'deleteData']);
Route::get('delete-rumahsakit/{id}', [RumahsakitController::class, 'deleteData']);

Route::get('pasiens/filter', [PasienController::class, 'filter'])->name('pasiens.filter');
