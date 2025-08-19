<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;


class ProdukController extends Controller
{
    public function index(){
        $toko = [
            'nama'=> 'Toko Jaya abadi',
            'alamat'=> 'sidoarjo, Jawa Timur',
            'tipe'=> 'Ruko'
        ];
        $produk = produk::get();//query untuk mengambil semua data dari tb_produk
        return view('pages.produk.show',[
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }
    public function create(){
        return view('pages.produk.add'); // Mengembalikan view untuk menambah produk
    }


// ...existing code...
    public function store(Request $request){
        //validasi
        $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi' => 'required',
        ]);
        // Menyimpan data produk baru
        // Pastikan model Produk sudah dibuat dengan benar
        // query tambah data
        produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
            'kategori_id' => 1, // Misalnya kategori_id 1
        ]);
        //setelah data berhasil disimpan, redirect ke halaman daftar produk
        // dengan pesan sukses
        return redirect('/product')->with('message','berhasil menambahkan data'); // Redirect ke halaman daftar produk
    }
// ...existing code...
}
