<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargaKaryawanTable extends Migration
{
    public function up()
    {
        Schema::create('keluarga_karyawan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan');
            $table->string('nik', 20);
            $table->string('nama');
            $table->string('hubungan');
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('pekerjaan')->nullable();
            $table->timestamps();

            // $table->foreign('nip')->references('nip')->on('karyawan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('keluarga_karyawan');
    }
}

