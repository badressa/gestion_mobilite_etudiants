<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id('codeProgramme');
            $table->string('nomProgramme', 50);
            $table->integer('dureeEchange');
            $table->unsignedBigInteger('codeDiplome');
            $table->unsignedBigInteger('codeDiplome_1');
            $table->foreign('codeDiplome')->references('codeDiplome')->on('diplomes');
            $table->foreign('codeDiplome_1')->references('codeDiplome')->on('diplomes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programmes');
    }
}
