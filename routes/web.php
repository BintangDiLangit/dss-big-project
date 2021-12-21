<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MatrixkeputusanController;
use App\Http\Controllers\SkalaController;
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

Route::get('/', function () {
	return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
	Route::resource('alternatif', AlternatifController::class);
	Route::resource('bobot', BobotController::class);
	Route::resource('kriteria', KriteriaController::class);
	Route::resource('skala', SkalaController::class);
	Route::resource('matrixkeputusan', MatrixkeputusanController::class);

	Route::get('saw', [HomeController::class, 'sawmetode'])->name('metode.saw');
	Route::get('wp', [HomeController::class, 'wpmetode'])->name('metode.wp');
	Route::get('topsis', [HomeController::class, 'topsismetode'])->name('metode.topsis');
	Route::get('multimoora', [HomeController::class, 'multimoorametode'])->name('metode.multimoora');
});
