<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
// ...existing code...
    public function run(): void
    {   //query untuk menambahkan data
        DB::table('tb_produk')->insert([
            [
                "nama_produk" => "Smart TV samsung 24 inch",
                "harga" => 10000,
                "deskripsi_produk" => "ini adalah sebuah deskripsi dummy",
                "kategori_id" => 2,
                "created_at" => now(),
            ],
            [
                "nama_produk" => "Laptop ASUS ROG",
                "harga" => 18000000,
                "deskripsi_produk" => "ini adalah sebuah deskripsi dummy",
                "kategori_id" => 2,
                "created_at" => now()
            ],
            [
                "nama_produk"=> "Smartwach Apple sseries 9",
                "harga" => 10000000,
                "deskripsi_produk" => "ini adalah sebuah deskripsi dummy",
                "kategori_id" => 2,
                "created_at" => now()
            ]
        ]);
    }

}
