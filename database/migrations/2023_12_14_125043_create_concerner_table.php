<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcernerTable extends Migration
{
    public function up()
    {
        Schema::create('concerner', function (Blueprint $table) {
            $table->unsignedBigInteger('codeCours');
            $table->unsignedBigInteger('codeDemandeM');
            $table->foreign('codeCours')->references('codeCours')->on('cours');
            $table->foreign('codeDemandeM')->references('codeDemandeM')->on('demandes_mobilite');
            $table->primary(['codeCours', 'codeDemandeM']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('concerner');
    }
}
