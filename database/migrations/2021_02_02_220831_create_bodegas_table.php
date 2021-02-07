<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->char('name',100)->nullable(false);
            $table->char('ruc',100)->nullable(false);
            $table->char('encargado',100)->nullable(false);
            $table->char('horario',15)->nullable(false);
            $table->string('phone',15)->unique();

            $table->string('direccion',50)->unique();
            $table->char('log',100)->nullable(false)->unique();
            $table->char('lat',100)->nullable(false)->unique();
            $table->char('distrito',30)->nullable(false);
            $table->char('ciudad',30)->nullable(false);     
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
        Schema::dropIfExists('bodegas');
    }
}
