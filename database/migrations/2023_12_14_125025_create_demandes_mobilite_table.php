<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesMobiliteTable extends Migration
{
    public function up()
    {
        Schema::create('demandes_mobilite', function (Blueprint $table) {
            $table->id('codeDemandeM');
            $table->dateTime('dateDepotDemandeM');
            $table->string('etatDemandeM', 50);
            $table->string('numEtudiant', 50);
            $table->unsignedBigInteger('codeProgramme');
            $table->foreign('numEtudiant')->references('numEtudiant')->on('etudiants');
            $table->foreign('codeProgramme')->references('codeProgramme')->on('programmes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demandes_mobilite');
    }
}
