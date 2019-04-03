<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_guru');
            $table->unsignedBigInteger('mapels_id');
            $table->integer('nip')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            

            $table->foreign('mapels_id')->references('id')->on('mapels')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Gurus');
    }
}
