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