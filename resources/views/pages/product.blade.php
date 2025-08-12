
@extends('layouts.master') {{-- Meng-extend layout utama agar tampilan konsisten --}}

@section('konten') {{-- Awal section 'konten' yang akan diisi di layout master --}}
    <h1>Daftar Produk Kami</h1> {{-- Judul halaman --}}
      <hr> {{-- Garis horizontal sebagai pemisah --}}
    <button type="button" class="btn btn-primary mb-3">Tambah data</button> {{-- Tombol untuk menambah data produk --}}
    <div class="card"> {{-- Card Bootstrap untuk membungkus tabel --}}
        <div class="card-header">
            Daftar Produk {{-- Header card --}}
        </div>
  <div class="card-body">
 <table class="table table-striped table-bordered "> {{-- Tabel dengan style Bootstrap --}}
  <thead>
    <tr>
      <th scope="col">nomer</th> {{-- Kolom nomor urut --}}
      <th scope="col">Nama Produk</th> {{-- Kolom nama produk --}}
      <th scope="col">Stok</th> {{-- Kolom stok produk --}}
      <th scope="col">Harga</th> {{-- Kolom harga produk --}}
      <th scope="col">Aksi</th> {{-- Kolom aksi (edit/hapus) --}}
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th> {{-- Nomor urut --}}
      <td>Laptop ROG</td> {{-- Nama produk --}}
      <td>25</td> {{-- Jumlah stok --}}
      <td>15000000</td> {{-- Harga produk --}}
      <td>
        <button type="button" class="btn btn-danger">Hapus</button> {{-- Tombol hapus --}}
        <button type="button" class="btn btn-warning">Edit</button> {{-- Tombol edit --}}
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>

@endsection {{-- Akhir section