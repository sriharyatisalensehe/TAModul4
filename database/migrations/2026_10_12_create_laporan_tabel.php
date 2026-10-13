<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration (untuk membuat tabel).
     */
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('lokasi');
            $table->integer('tinggi_genangan');
            $table->date('tanggal_kejadian');
            $table->timestamps();
        });
    }

    /**
     * Balikkan migration (untuk menghapus tabel jika di-rollback).
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};