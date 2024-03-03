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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('nama');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat')->nullable();
            $table->string('foto')->nullable();
            $table->string('nohp', 15)->nullable();
            $table->string('email')->unique()->nullable(); // Tambah kolom email
            $table->string('jabatan')->nullable(); // Tambah kolom jabatan
            $table->string('status_kawin')->nullable(); // Tambah kolom status_kawin
            $table->date('tanggal_masuk')->nullable(); // Tambah kolom tanggal_masuk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
