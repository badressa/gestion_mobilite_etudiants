<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompatibleTable extends Migration
{
    public function up()
    {
        Schema::create('compatible', function (Blueprint $table) {
            $table->unsignedBigInteger('codeCours');
            $table->unsignedBigInteger('codeCours_1');
            $table->foreign('codeCours')->references('codeCours')->on('cours');
            $table->foreign('codeCours_1')->references('codeCours')->on('cours');
            $table->primary(['codeCours', 'codeCours_1']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('compatible');
    }
}
