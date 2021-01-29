<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->char('name',100)->nullable(false);
            $table->text('description')->nullable(false);
            $table->text('process')->nullable(false);
            $table->char('nutritionists',20)->nullable(false);
            $table->char('chef',20)->nullable(false);
            $table->tinyInteger('calification');
            $table->text('ingredient1');
            $table->text('ingredient2');
            $table->text('ingredient3');
            $table->text('ingredient4');
            $table->text('ingredient5');
            $table->text('ingredient6');
            $table->text('ingredient7');
            $table->text('ingredient8');
            $table->text('ingredient9');
            $table->text('ingredient10'); 
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
        Schema::dropIfExists('recetas');
    }
}
