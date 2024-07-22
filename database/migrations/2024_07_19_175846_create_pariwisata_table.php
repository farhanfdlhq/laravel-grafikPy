<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePariwisataTable extends Migration
{
    public function up()
    {
        Schema::create('pariwisata', function (Blueprint $table) {
            $table->id();
            $table->integer('periode_data');
            $table->string('jenis_usaha');
            $table->string('kecamatan');
            $table->string('wilayah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pariwisata');
    }
}
