<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\produk;


class ProdukController extends Controller
{
    public function index(Request $request){
        $toko = [
            'nama'=> 'Toko Jaya abadi',
            'alamat'=> 'sidoarjo, Jawa Timur',
            'tipe'=> 'Ruko'
        ];

        $search = $request->keyword; // Mengambil keyword pencarian dari request

        $produk = produk::when($search,function($query,$search){
            return $query->where('nama_produk','like',"%{$search}%");
        })->get();//query untuk mengambil semua data dari tb_produk
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
            'nama_produk' => 'required|min:8|max:12',//nama produk wajib di isi minimal 8 karakter
            'harga_produk' => 'required',
            'deskripsi' => 'required',
        ],[
            'nama_produk.min'=>'Nama produk minimal 8 karakter',// Pesan jika nama produk kurang dari 8 karakter
            'nama_produk.max'=>'Nama produk maksimal 12 karakter',// Pesan jika nama produk lebih dari 12 karakter
            'nama_produk.required'=>'imputan nama produk wajib di isi',// Pesan jika nama produk tidak diisi
            'harga_produk.required'=>'imputan harga produk wajib di isi',// Pesan jika harga produk tidak diisi
            'deskripsi.required'=>'imputan deskripsi produk wajib di isi',// Pesan jika deskripsi produk tidak diisi

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

    public function show($id){
        //query atau perintah
        //elequent orm 
        $data = produk::findOrFail($id);

        //query builder
       // DB::table('tb_produk')->where('id_produk',$id)->firstOrFail();
        
        return view('pages.produk.detail',[
            'produk' => $data, 
        ]);
    }

    public function edit($id){
        // Mengambil data produk berdasarkan ID
          $data = produk::findOrFail($id);

          return view('pages.produk.edit',[
            'data'=> $data,
          ]);
    }

    public function update($id, Request $request){
         //validasi
        $request->validate([
            'nama_produk' => 'required|min:8',//nama produk wajib di isi minimal 8 karakter
            'harga_produk' => 'required',
            'deskripsi' => 'required',
        ],[
            'nama_produk.min'=>'Nama produk minimal 8 karakter',// Pesan jika nama produk kurang dari 8 karakter
            'nama_produk.required'=>'imputan nama produk wajib di isi',// Pesan jika nama produk tidak diisi
            'harga_produk.required'=>'imputan harga produk wajib di isi',// Pesan jika harga produk tidak diisi
            'deskripsi.required'=>'imputan deskripsi produk wajib di isi',// Pesan jika deskripsi produk tidak diisi

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

        produk::where('id_produk',$id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
        ]);

        return redirect('/product')->with('message','data berhasil di edit'); // Redirect ke halaman daftar produk
    }

    public function destroy($id){
        // Menghapus data produk berdasarkan ID
        produk::findOrFail($id)->delete();
        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect('/product')->with('message','data berhasil di hapus'); // Redirect ke halaman daftar produk
    }
}
