<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->unsignedInteger('jawaban_id')->nullable();
            $table->unsignedInteger('profil_id')->nullable();
            $table->timestamps();

            //foreign key
            $table->foreign('jawaban_id')
                ->references('id')
                ->on('jawaban')
                ->onDelete('restrict');

            $table->foreign('profil_id')
                ->references('id')
                ->on('profil')
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
        Schema::dropIfExists('komentar_jawaban');
    }
}
