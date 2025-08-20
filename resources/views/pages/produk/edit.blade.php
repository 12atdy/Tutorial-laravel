@extends('layouts.master')

@section('konten')
    <div class="card">
        <div class="card-header">Update data Produk</div>
        <div class="card-body">
            <form action="/product/{{ $data->id_produk }}" method="POST">
                @method('PUT')
                @csrf {{-- Token untuk keamanan form --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Update data Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{ $data->nama_produk }}">
                            {{-- Input untuk nama produk dengan nilai lama jika ada --}}
                            @error('nama_produk')
                             {{-- Menampilkan pesan error jika validasi gagal --}}
                             <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                             @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control" value="{{ $data->harga }}">
                            {{-- Input untuk harga produk dengan nilai lama jika ada --}}
                            @error('harga_produk')
                             {{-- Menampilkan pesan error jika validasi gagal --}}
                             <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" style="height: 100px">{{ $data->deskripsi_produk }}</textarea>
                            <label >deskripsi Produk</label>
                             @error('deskripsi')
                             {{-- Menampilkan pesan error jika validasi gagal --}}
                             <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                             @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 ">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection