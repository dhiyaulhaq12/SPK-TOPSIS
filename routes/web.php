<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SubKriteriaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/google/redirect', [AuthController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [AuthController::class, 'callback'])->name('google.callback');
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');


    Route::controller(AuthController::class)->group(function () {
        Route::get('register', 'register')->name ('register');
        Route::post('register', 'registerSave')->name ('register.save');

        Route::get('login', 'login')->name ('login');
        Route::post('login', 'loginAction')->name ('login.action');
        
        Route::get('logout', 'logout')->middleware('auth')->name('logout');
        
    });

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    
    

    Route::controller(AlternatifController::class)->prefix('alternatifs')->group(function () {
        Route::get('', 'index')->name('alternatif');
        Route::get('create', 'create')->name('alternatif.create');
        Route::post('store', 'store')->name('alternatif.store');
        Route::get('{id}/edit', 'edit')->name('alternatif.edit');
        Route::put('{id}', 'update')->name('alternatif.update');
        Route::delete('{id}', 'destroy')->name('alternatif.destroy');
    });
    

    Route::controller(KriteriaController::class)->prefix('kriterias')->group(function () {
        Route::get('', 'index')->name('kriteria');
        Route::get('create', 'create')->name('kriteria.create');
        Route::post('store', 'store')->name('kriteria.store');
        Route::get('{id}/edit', 'edit')->name('kriteria.edit');
        Route::put('{id}', 'update')->name('kriteria.update');
        Route::delete('{id}', 'destroy')->name('kriteria.destroy');
    });

    
    
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
    Route::get('/penilaian/create', [PenilaianController::class, 'create'])->name('penilaian.create');
    Route::post('/penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');
    Route::get('/penilaian/{id}/edit', [PenilaianController::class, 'getForms'])->name('penilaian.edit');
    Route::put('/penilaian/update', [PenilaianController::class, 'update'])->name('penilaian.update');
    Route::delete('/penilaian/{id}', [PenilaianController::class, 'destroy'])->name('penilaian.destroy');
    Route::get('/penilaian/calculate', [PenilaianController::class, 'calculate'])->name('penilaian.calculate');

    Route::get('/perhitungan/topsis', [CalculateController::class, 'topsis'])->name('calculate.topsis');

    Route::controller(SubKriteriaController::class)->prefix('subkriterias')->group(function () {
        Route::get('', 'index')->name('SubKriteria');
        Route::get('create', 'create')->name('SubKriteria.create');
        Route::post('store', 'store')->name('SubKriteria.store');
    });



});