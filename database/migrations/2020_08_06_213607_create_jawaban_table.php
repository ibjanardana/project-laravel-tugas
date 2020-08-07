<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->integer('pertanyaan_id');
            $table->integer('profil_id');
            $table->timestamps();

            //foreign key
            $table->foreign('pertanyaan_id')
                ->references('id')
                ->on('jawaban_pertanyaan_idx')
                ->onDelete('restrict');

            $table->foreign('jawaban_profil1_idx')
                ->references('id')
                ->on('jawaban_profil1_idx')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
