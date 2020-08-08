<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('isi');
            $table->date('tanggal_dibuat');
            $table->unsignedInteger('pertanyaan_id')->nullable();
            $table->unsignedInteger('profil_id')->nullable();
            $table->timestamps();

            //foreign key
            $table->foreign('pertanyaan_id')
                ->references('id')
                ->on('pertanyaan')
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
        Schema::dropIfExists('komentar_pertanyaan');
    }
}
