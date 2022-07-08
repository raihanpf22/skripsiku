<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KetamController;
use App\Http\Controllers\GetasController;
use App\Http\Controllers\KricuController;
use App\Http\Controllers\Otak2Controller;

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
    return view('dashboard');
})->name('dashboard');

// Ketam
Route::get('/datacleaning_ketam', [KetamController::class, 'dataclean_ketam'])->name('dataclean_ketam');
Route::get('/casefolding_ketam', [KetamController::class, 'casefolding_ketam'])->name('casefolding_ketam');
Route::get('/tokenizing_ketam', [KetamController::class, 'tokenizing_ketam'])->name('tokenizing_ketam');
Route::get('/filtering_ketam', [KetamController::class, 'filtering_ketam'])->name('filtering_ketam');
Route::get('/normalize_ketam', [KetamController::class, 'normalize_ketam'])->name('normalize_ketam');
Route::get('/stemming_ketam', [KetamController::class, 'stemming_ketam'])->name('stemming_ketam');

//Getas
Route::get('/datacleaning_getas', [GetasController::class, 'dataclean_getas'])->name('dataclean_getas');
Route::get('/casefolding_getas', [GetasController::class, 'casefolding_getas'])->name('casefolding_getas');
Route::get('/tokenizing_getas', [GetasController::class, 'tokenizing_getas'])->name('tokenizing_getas');
Route::get('/filtering_getas', [GetasController::class, 'filtering_getas'])->name('filtering_getas');
Route::get('/normalize_getas', [GetasController::class, 'normalize_getas'])->name('normalize_getas');
Route::get('/stemming_getas', [GetasController::class, 'stemming_getas'])->name('stemming_getas');

//Kricu
Route::get('/datacleaning_kricu', [KricuController::class, 'dataclean_kricu'])->name('dataclean_kricu');
Route::get('/casefolding_kricu', [KricuController::class, 'casefolding_kricu'])->name('casefolding_kricu');
Route::get('/tokenizing_kricu', [KricuController::class, 'tokenizing_kricu'])->name('tokenizing_kricu');
Route::get('/filtering_kricu', [KricuController::class, 'filtering_kricu'])->name('filtering_kricu');
Route::get('/normalize_kricu', [KricuController::class, 'normalize_kricu'])->name('normalize_kricu');
Route::get('/stemming_kricu', [KricuController::class, 'stemming_kricu'])->name('stemming_kricu');

//Otak-otak
Route::get('/datacleaning_otak2', [Otak2Controller::class, 'dataclean_otak2'])->name('dataclean_otak2');
Route::get('/casefolding_otak2', [Otak2Controller::class, 'casefolding_otak2'])->name('casefolding_otak2');
Route::get('/tokenizing_otak2', [Otak2Controller::class, 'tokenizing_otak2'])->name('tokenizing_otak2');
Route::get('/filtering_otak2', [Otak2Controller::class, 'filtering_otak2'])->name('filtering_otak2');
Route::get('/normalize_otak2', [Otak2Controller::class, 'normalize_otak2'])->name('normalize_otak2');
Route::get('/stemming_otak2', [Otak2Controller::class, 'stemming_otak2'])->name('stemming_otak2');