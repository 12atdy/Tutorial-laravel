<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/about', function () {

    return view('pages.about',[
        'nama' => 'Muhammad Idris',
        'umur' => 10,
        'alamat' => 'Indonesia',
    ]);
});


Route::view('/contact','pages.contact');  
//satu controler dengan method 
Route::get('/product',[ProdukController::class, 'index']);// read data menampilkan data

Route::get('/product/create',[ProdukController::class, 'create']);// create data menampilkan form tambah data
Route::post('/product',[ProdukController::class, 'store']);// create data menambah data
Route::get('/product/{id}',[ProdukController::class, 'show']);// untuk menampilkan halaman detail produk

Route::get('/product/{id}/edit',[ProdukController::class, 'edit']);// untuk menampilkan halaman edit produk
Route::put('/product/{id}',[ProdukController::class, 'update']);// untuk mengupdate data produk

Route::delete('/product/{id}',[ProdukController::class, 'destroy']);// untuk menghapus data produk