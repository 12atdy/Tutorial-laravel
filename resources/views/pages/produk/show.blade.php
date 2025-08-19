
@extends('layouts.master') {{-- Meng-extend layout utama agar tampilan konsisten --}}

@section('konten') {{-- Awal section 'konten' yang akan diisi di layout master --}}
    <h1>Daftar Produk Kami</h1> {{-- Judul halaman --}}
      <hr> {{-- Garis horizontal sebagai pemisah --}}
    <a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah data</a> {{-- Tombol untuk menambah data produk --}}
        <div class="alert alert-primary">
          <b>Nama Toko :</b>{{$data_toko['nama']}} {{-- Menampilkan nama toko --}}
          <br>
          <b>Alamat :</b>{{ $data_toko['alamat'] }} {{-- Menampilkan alamat toko --}}
          <br>
          <b>Tipe Toko : </b>{{ $data_toko['tipe'] }} {{-- Menampilkan tipe toko --}}
        </div>
      @if (session('message'))
        <div class="alert alert-primary">{{ session('message') }}</div>
      @endif

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
      <th scope="col">Harga</th> {{-- Kolom stok produk --}}
      <th scope="col">deskripsi</th> {{-- Kolom harga produk --}}
      <th scope="col">Aksi</th> {{-- Kolom aksi (edit/hapus) --}}
    </tr>
  </thead>
  <tbody>
    @foreach ($data_produk as $item)
      <tr>
          <th scope="row">{{ $loop->iteration }}</th> {{-- Nomor urut --}}
          <td>{{$item->nama_produk}}</td> {{-- Nama produk --}}
          <td>{{ $item->harga }}</td> {{-- Jumlah stok --}}
          <td>{{ $item->deskripsi_produk }}</td> {{-- Harga produk --}}
          <td>
           <button type="button" class="btn btn-danger">Hapus</button> {{-- Tombol hapus --}}
           <button type="button" class="btn btn-warning">Edit</button> {{-- Tombol edit --}}
          </td>
        </tr>
    @endforeach
   
  </tbody>
</table>
  </div>
</div>

@endsection {{-- Akhir section 'konten' --}}