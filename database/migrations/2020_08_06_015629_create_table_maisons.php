<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMaisons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maisons', function (Blueprint $table) {
            $table->id() ;
            $table->timestamps() ;
            $table->string('intitule') ;
            $table->string('statut') ;
            $table->string('lieu') ;
            $table->unsignedTinyInteger('chambre')->nullable() ;
            $table->unsignedTinyInteger('salon')->nullable() ;
            $table->unsignedTinyInteger('superficie') ;
            $table->string('image_presentation') ;
            $table->string('shodai')->nullable() ;
            $table->string('nidaime')->nullable() ;
            $table->string('sandaime')->nullable() ;
            $table->string('yondaime')->nullable() ;
            $table->string('gondaime')->nullable() ;
            $table->string('rokudaime')->nullable() ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maisons');
    }
}
