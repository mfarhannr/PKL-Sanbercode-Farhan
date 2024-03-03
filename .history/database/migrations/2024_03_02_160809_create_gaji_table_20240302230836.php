<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->decimal('gaji_pokok', 10, 2);
            $table->decimal('tunjangan', 10, 2);
            $table->decimal('total_gaji', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}

