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
        Schema::create('sertifikasi_keahlian', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_sertifikasi');
            $table->string('lembaga_penerbit');
            $table->date('tanggal_terbit');
            $table->date('tanggal_expire')->nullable();
            $table->string('sertifikat_path')->nullable(); // Kolom untuk menyimpan path sertifikat
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikasi_keahlian');
    }
};
