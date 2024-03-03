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
            Schema::create('pendidikan', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
            $table->string('tingkat_pendidikan');
            $table->string('nama_sekolah');
                $table->string('jurusan');
                $table->year('tahun_lulus');
                $table->timestamps();

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};
