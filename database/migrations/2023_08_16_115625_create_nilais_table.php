<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('matakuliah_id');
            $table->decimal('nilai_harian', 8, 2);
            $table->decimal('nilai_uts', 8, 2);
            $table->decimal('nilai_akhir', 8, 2);
            $table->char('grade', 2);
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
