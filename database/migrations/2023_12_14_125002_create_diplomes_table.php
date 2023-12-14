<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomesTable extends Migration
{
    public function up()
    {
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id('codeDiplome');
            $table->string('nomDiplome', 50);
            $table->string('niveauDiplome', 50);
            $table->unsignedBigInteger('codeU');
            $table->foreign('codeU')->references('codeU')->on('universites');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diplomes');
    }
}
