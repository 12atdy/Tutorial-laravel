<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
route::get('/about', function () {

    return view('pages.about',[
        'nama' => 'Muhammad Idris',
        'umur' => 10,
        'alamat' => 'Indondesia',
    ]);
});


route::view('/contact','pages.contact');   
route::view('/product','pages.product'); 