<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
            $table->bigIncrements('jawaban_id')->autoIncrement();
            $table->unsignedInteger('profil_id');
            $table->unsignedInteger('poin', 11);
            $table->timestamps();

            $table->foreign('jawaban_has_profil_profil1_idx')
                ->references('id')
                ->on('profil')
                ->onDelete('restrict');

            $table->foreign('jawaban_has_profil_jawaban1_idx')
                ->references('id')
                ->on('jawaban')
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
        Schema::dropIfExists('like_dislike_jawaban');
    }
}
