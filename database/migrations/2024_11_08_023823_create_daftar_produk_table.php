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
    {
        Schema::create('daftar_produk', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('nama_produk', 255);
            $table->text('deskripsi');
            $table->string('gambar_produk', 255);
            $table->string('tipe', 255);
            $table->integer('stok')->default(0);
            $table->integer('dibeli')->default(0);
            $table->integer('harga')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_produk');
    }
};
