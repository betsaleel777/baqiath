<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTerrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('intitule') ;
            $table->string('statut') ;
            $table->string('lieu') ;
            $table->unsignedTinyInteger('superficie') ;
            $table->string('image_presentation') ;
            $table->string('shodai') ;
            $table->string('nidaime') ;
            $table->string('sandaime') ;
            $table->string('yondaime') ;
            $table->string('gondaime') ;
            $table->string('rokudaime') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terrains');
    }
}
