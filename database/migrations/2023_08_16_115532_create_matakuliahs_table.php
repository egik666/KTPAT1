<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->integer('semester');
            $table->integer('sks_teori');
            $table->integer('sks_praktikum');
            $table->unsignedBigInteger('jurusan_id');
            $table->timestamps();

            $table->foreign('jurusan_id')->references('id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliahs');
    }
}
