<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitesTable extends Migration
{

    public function up()
    {
        Schema::create('universites', function (Blueprint $table) {
            $table->id('codeU');
            $table->string('nomU', 50);
            $table->string('villeU', 50);
            $table->string('paysU', 50);
            $table->string('webU', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('universites');
    }
}

