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
        Schema::create('order_sablon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
            $table->string('status');
            $table->string('metode_kaos');
            $table->string('jenis_kaos');
            $table->integer('jumlah_kaos');
            $table->string('warna_kaos');
            $table->integer('ukuran1')->nullable();
            $table->integer('ukuran2')->nullable();
            $table->string('warna_sablon')->nullable();
            $table->string('bahan_sablon');
            $table->string('ukuran_sablon');
            $table->string('gambar');
            $table->string('posisi');
            $table->integer('harga')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_sablon');
    }
};
