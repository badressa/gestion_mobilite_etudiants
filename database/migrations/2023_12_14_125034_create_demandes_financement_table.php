<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesFinancementTable extends Migration
{
    public function up()
    {
        Schema::create('demandes_financement', function (Blueprint $table) {
            $table->id('codeDemandeF');
            $table->dateTime('dateDepotDemandeF');
            $table->string('etatDemandeF', 50);
            $table->decimal('montantDemandeF', 15, 2);
            $table->unsignedBigInteger('codeContrat');
            $table->string('numEtudiant', 50);
            $table->foreign('codeContrat')->references('codeContrat')->on('contrats');
            $table->foreign('numEtudiant')->references('numEtudiant')->on('etudiants');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demandes_financement');
    }
}
