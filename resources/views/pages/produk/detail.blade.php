
@extends('layouts.master') {{-- Meng-extend layout utama agar tampilan konsisten --}}

@section('konten') {{-- Awal section 'konten' yang akan diisi di layout master --}}
    <h1>Detail Produk Kami</h1> {{-- Judul halaman --}}
      <hr> {{-- Garis horizontal sebagai pemisah --}}

    <div class="card"> {{-- Card Bootstrap untuk membungkus tabel --}}
        <div class="card-header">
            Detail Produk {{-- Header card --}}
        </div>
        
  <div class="card-body">
        <img src="https://placehold.co/600x400" class="img-fluid" alt="...">
        <p>Nama produk : {{ $produk->nama_produk }}</p>
        <p>Harga :  Rp.{{ $produk->harga }}</p>
        <p>Deskripsi :  {{ $produk->deskripsi_produk }}</p>
        <p>Kategori :   barang elektronik</p>
        <p>Stok :   tersedia</p>
        <a href="/product" class="btn btn-primary">Kembali ke produk</a>
  </div>
</div>

@endsection {{-- Akhir section 'konten' --}}