<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'tb_produk'; // Nama tabel yang digunakan oleh model ini

    protected $primaryKey = 'id_produk'; // Kunci primer tabel ini, jika berbeda dari 'id_produk'

    protected $fillabe = []; // Daftar atribut yang dapat diisi secara massal, jika ada

    protected $guarded = []; // Atribut yang tidak boleh diisi secara massal, jika ada
}
