<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('pertanyaan_id')->autoIncrement();
            $table->unsignedInteger('profil_id');
            $table->integer('point', 11);
            $table->timestamps();

            //foreign key
            $table->foreign('pertanyaan_has_profil_profil1_idx')
                ->references('id')
                ->on('profil')
                ->onDelete('restrict');

            $table->foreign('pertanyaan_has_profil_pertanyaan1_idx')
                ->references('id')
                ->on('pertanyaan')
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
        Schema::dropIfExists('like_dislike_pertanyaan');
    }
}
