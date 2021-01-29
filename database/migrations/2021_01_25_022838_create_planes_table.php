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
        $table->integer('costo')->nullable(false);
        $table->string('beneficio1')->unique();
        $table->string('beneficio2')->unique();   
        $table->string('beneficio3')->unique();   
        $table->string('beneficio4')->unique();   
        $table->string('beneficio5')->unique();   
        $table->string('beneficio6')->unique();   
        $table->string('beneficio7')->unique();
        $table->string('beneficio8')->unique();   
        $table->string('beneficio9')->unique();   
        $table->string('beneficio10')->unique();  
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
