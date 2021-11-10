<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiangVienController;
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
    return view('trang-chu');
})->name('trang-chu');
Route::get('/giang-vien',[GiangVienController::class,'layDanhSach'])->name('ds-giang-vien');
Route::get('/giang-vien/them-moi',[GiangVienController::class,'formThemMoi'])->name('them-moi-giang-vien');
Route::post('/giang-vien/them-moi',[GiangVienController::class,'themMoi'])->name('xl-them-moi-giang-vien');