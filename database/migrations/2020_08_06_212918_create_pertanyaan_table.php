<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement()->unique();
            $table->string('judul', 45);
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->unsignedInteger('jawaban_tepat_id');
            $table->unsignedInteger('profil_id');
            $table->timestamps();

            //foreign key
            $table->foreign('jawaban_tepat_id')
                ->references('id')
                ->on('pertanyaan_jawaban_idx')
                ->onDelete('restrict');

            $table->foreign('profil_id')
                ->references('id')
                ->on('pertanyaan_profil1_idx')
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
        Schema::dropIfExists('pertanyaan');
    }
}
