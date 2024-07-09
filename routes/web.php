<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\QrisController;

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
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/item', [HomeController::class, 'item'])->name('item');
Route::get('/foto', [HomeController::class, 'foto'])->name('foto');
Route::get('/panduan', [HomeController::class, 'panduan'])->name('panduan');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/detail_spes', [HomeController::class, 'detail_spes'])->name('detail_spes');
Route::get('/detail_med', [HomeController::class, 'detail_med'])->name('detail_med');
Route::get('/detail_prem', [HomeController::class, 'detail_prem'])->name('detail_prem');
Route::get('/detail_stand', [HomeController::class, 'detail_stand'])->name('detail_stand');

Route::get('/galeri', [HomeController::class, 'galeri'])->name('dashboard.galeri');
Route::get('/beli', [HomeController::class, 'beli'])->name('dashboard.beli');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/pesan/create', [PesanController::class, 'create'])->name('pesan.create'); // Form untuk membuat pesan baru
Route::post('/pesan', [PesanController::class, 'store'])->name('pesan.store'); // Menyimpan pesan baru



Route::middleware('auth')->group(function () {
    Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index'); // Menampilkan semua pesan
    Route::get('/pesan/{pesan}', [PesanController::class, 'show'])->name('pesan.show'); // Menampilkan detail pesan
    Route::get('/pesan/{pesan}/edit', [PesanController::class, 'edit'])->name('pesan.edit'); // Form untuk mengedit pesan
    Route::put('/pesan/{pesan}', [PesanController::class, 'update'])->name('pesan.update'); // Menyimpan perubahan pesan
    Route::delete('/pesan/{pesan}', [PesanController::class, 'destroy'])->name('pesan.destroy'); // Menghapus pesan

    Route::get('/buy', [BuyController::class, 'index'])->name('buy.index'); // Menampilkan semua pembelian
    Route::get('/buy/{buy}', [BuyController::class, 'show'])->name('buy.show'); // Menampilkan detail pembelian
    Route::get('/buy/{buy}/edit', [BuyController::class, 'edit'])->name('buy.edit'); // Form untuk mengedit pembelian
    Route::put('/buy/{buy}', [BuyController::class, 'update'])->name('buy.update'); // Menyimpan perubahan pembelian
    Route::delete('/buy/{buy}', [BuyController::class, 'destroy'])->name('buy.destroy'); // Menghapus pembelian

    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/shop', [AdminController::class, 'shop'])->name('admin.shop');
    Route::resource('/album', AlbumController::class);
    Route::resource('/qris', QrisController::class);
});


Route::get('/buy/create', [BuyController::class, 'create'])->name('buy.create'); // Form untuk membuat pembelian baru
Route::post('/buy', [BuyController::class, 'store'])->name('buy.store'); // Menyimpan pembelian baru



