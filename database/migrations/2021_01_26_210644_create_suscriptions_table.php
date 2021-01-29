<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptions', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->integer("plan_id")->unsigned();
            $table->foreign("plan_id")->references("id")->on("planes")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")
            ->onDelete("cascade")
            ->onUpdate("cascade");        
            $table->dateTime('fin_created_at')->nullable(false);
            $table->char('status',15)->nullable(false);
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
        Schema::dropIfExists('suscriptions');
    }
}
