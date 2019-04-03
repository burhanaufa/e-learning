<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kuis');
            $table->timestamps();
        });
        //Schema::table('kuis', function (Blueprint $table) {
            //$table->unsignedBigInteger('materi_id');

            //$table->foreign('materi_id')->references('id')->on('materi');
        //});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuis');
    }
}
