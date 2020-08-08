<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->longText('isi');
            $table->date('tanggal_dibuat');
            $table->unsignedBigInteger('jpertanyaan_id');
            $table->unsignedBigInteger('profil_id');
            $table->foreign('jpertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->rememberToken();
            $table->timestamps();
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