<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DaftarPro;
use App\Http\Controllers\UlasanPage;
use App\Http\Controllers\OrderPage;
use App\Http\Controllers\OrderSablonCon;
use App\Http\Controllers\EditProduk;
use App\Models\Daftars;
use Illuminate\Support\Facades\DB;

Route::view('/', 'welcome');

// Login and Signup routes (Assuming they do not need auth middleware)
Route::get('/login2', [Controllers\Login::class, 'index']);
Route::get('/signup2', [Controllers\Signup::class, 'index']);

// Home route (No middleware needed if it's a public page)
Route::get('/home2', [Controllers\Home::class, 'index']);

// Dashboard route with auth and verified middleware
Route::get('/dashboard', [Controllers\Home::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes with auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin routes with auth and admin middleware
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [Controllers\HomeController::class, 'index'])->name('admin');

    // CUSTOMER
    Route::get('admin/customer', [Controllers\CustomerPage::class, 'index'])->name('all.by');
    Route::get('/urut-by', [Controllers\CustomerPage::class, 'urutBy'])->name('urut.by');
    Route::get('/cari-by', [Controllers\CustomerPage::class, 'urutByCari'])->name('cari.by');
    Route::get('/urut-by-id', [Controllers\CustomerPage::class, 'urutById'])->name('urut.by.id');
    Route::get('/urut-total-by', [Controllers\CustomerPage::class, 'urutTotalBy'])->name('urut.total.by');
    Route::delete('admin/customer/{id}', [Controllers\CustomerPage::class, 'deleteUser'])->name('delete.user');

    // PRODUK
    Route::get('admin/daftar', function () {
        $countProduk = Daftars::count();
        $produks = DB::table('daftar_produk')->get();
        return view('admin.daftar', compact('countProduk','produks'));
    })->name('daftar.pro');
    Route::post('/addProduk', [DaftarPro::class, 'store'])->name('add.pro');
    Route::delete('admin/produk/{id}', [Controllers\DaftarPro::class, 'deleteProduk'])->name('delete.pro');
    Route::get('/urut-produk-total-by', [Controllers\DaftarPro::class, 'urutTotalBy'])->name('urut.produk.top');
    Route::get('/urut-produk-by-id', [Controllers\DaftarPro::class, 'urutById'])->name('urut.produk.id');
    Route::get('/cari-produk', [Controllers\DaftarPro::class, 'urutByCari'])->name('cari.produk.by');
    Route::get('/urut-produk', [Controllers\DaftarPro::class, 'urutBy'])->name('urut.produk');
    Route::get('/sticker-produk', [Controllers\DaftarPro::class, 'stickerPro'])->name('sticker.produk');
    Route::get('/kaos-produk', [Controllers\DaftarPro::class, 'kaosPro'])->name('kaos.produk');
    Route::get('/edit-pro/{id}', [Controllers\EditProduk::class, 'edit'])->name('edit.pro');
    Route::post('/update-pro/{id}', [Controllers\EditProduk::class, 'update'])->name('update.pro');
    
    // ULASAN
    Route::get('admin/ulasan', [Controllers\UlasanPage::class, 'index'])->name('ulasan.page');
    Route::get('ulasan-last', [Controllers\UlasanPage::class, 'orderByLast'])->name('ulasan.last');
    Route::get('ulasan-cari', [Controllers\UlasanPage::class, 'ulasanCari'])->name('ulasan.cari');
    Route::get('ulasan-b1', [Controllers\UlasanPage::class, 'bintang1'])->name('ulasan.b1');
    Route::get('ulasan-b2', [Controllers\UlasanPage::class, 'bintang2'])->name('ulasan.b2');
    Route::get('ulasan-b3', [Controllers\UlasanPage::class, 'bintang3'])->name('ulasan.b3');
    Route::get('ulasan-b4', [Controllers\UlasanPage::class, 'bintang4'])->name('ulasan.b4');
    Route::get('ulasan-b5', [Controllers\UlasanPage::class, 'bintang5'])->name('ulasan.b5');

    // SABLON
    Route::get('/download/{id}', [Controllers\SablonPageP::class, 'downloadFile'])->name('download.file');
    Route::get('/edit-order-sablon/{id}', [Controllers\SablonPageP::class, 'edit'])->name('edit.order.sablon');
    Route::post('/update-order-sablon/{id}', [Controllers\SablonPageP::class, 'update'])->name('update.orsab');
});

// ORDER routes with auth middleware
Route::middleware('auth','admin')->group(function () {
    Route::get('/order-page', [Controllers\OrderPage::class, 'index'])->name('order.dash');
    Route::get('/order-lunas', [Controllers\OrderPage::class, 'lunas'])->name('order.lunas');
    Route::get('/order-sablon', [Controllers\SablonPageP::class, 'index'])->name('order.sablon.admin');
});

// SABLON route (assuming it's accessible for authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('sablon/printing', [Controllers\SablonPageP::class, 'sablonPrinting'])->name('sablon.p');
    Route::post('/order-sablon/manual', [Controllers\OrderSablonCon::class, 'store'])->name('order.sablon');
    Route::post('/order-sablon/printing', [Controllers\OrderSablonCon::class, 'storeP'])->name('order.sablon_p');
    Route::get('/order-sablon/delete/{id}', [Controllers\OrderSablonCon::class, 'deleteOrderSab'])->name('order.sablon.delete');
});


// PEMBAYARAN
Route::middleware('auth')->group(function(){
    Route::post('/pembayaran-keranjang', [Controllers\Pembayaran::class, 'bayardp'])->name('pembayaran');
});
