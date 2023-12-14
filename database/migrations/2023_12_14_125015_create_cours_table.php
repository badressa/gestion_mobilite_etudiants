<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id('codeCours');
            $table->string('LibelleCours', 50);
            $table->string('nbECTS', 50);
            $table->integer('annee');
            $table->unsignedBigInteger('codeDiplome');
            $table->foreign('codeDiplome')->references('codeDiplome')->on('diplomes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
