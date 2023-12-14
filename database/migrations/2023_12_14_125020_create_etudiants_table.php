<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('numEtudiant', 50)->primary();
            $table->string('nomEtudiant', 50);
            $table->string('prenomEtudiant', 50);
            $table->string('mailEtudiant', 50);
            $table->integer('annee');
            $table->unsignedBigInteger('codeDiplome');
            $table->foreign('codeDiplome')->references('codeDiplome')->on('diplomes');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
