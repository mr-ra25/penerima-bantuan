<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaBantuanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route home default Laravel (bisa dihapus kalau nggak dipakai)
Route::get('/', function () {
    return view('welcome');
});

// Route resource untuk CRUD penerima bantuan
Route::resource('/penerima-bantuan', PenerimaBantuanController::class);