<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapelsSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapels_siswas', function (Blueprint $table) {
            $table->unsignedBigInteger('mapels_id')->nullable();
            $table->foreign('mapels_id')->references('id')
                  ->on('mapels')->onDelete('cascade');

            $table->unsignedBigInteger('siswas_id')->nullable();
            $table->foreign('siswas_id')->references('id')
                  ->on('siswas')->onDelete('cascade');
            
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
        Schema::dropIfExists('mapels_siswas');
    }
}
