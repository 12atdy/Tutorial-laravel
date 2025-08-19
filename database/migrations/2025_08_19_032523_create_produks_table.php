<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   //syntax dibawah untuk membuat tabel produk
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk');//defaultnya adalah 'id'
            $table->string('nama_produk',150); // default length dari laravel adalah 255
            $table->integer('harga'); // Stok produk
            $table->text('deskripsi_produk'); // Deskripsi produk
            $table->integer('kategori_id'); // Kategori produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
