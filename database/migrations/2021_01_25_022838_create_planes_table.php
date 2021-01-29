<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
        $table->increments('id')->nullable(false);
        $table->char('name',15)->nullable(false);
        $table->integer('costo',3)->nullable(false);
        $table->string('beneficio1');
        $table->string('beneficio2');   
        $table->string('beneficio3');   
        $table->string('beneficio4');   
        $table->string('beneficio5');   
        $table->string('beneficio6');   
        $table->string('beneficio7');
        $table->string('beneficio8');   
        $table->string('beneficio9');   
        $table->string('beneficio10');  
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
        Schema::dropIfExists('planes');
    }
}
