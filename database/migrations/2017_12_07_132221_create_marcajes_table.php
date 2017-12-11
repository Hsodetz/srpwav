<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcajes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('imagen')->default(1);
            
            $table->unsignedInteger('personal_id')->unsigned();
            // Llave foranea de la tabla marcajes    
            $table->foreign('personal_id')->references('id')->on('personals');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcajes');
    }
}
