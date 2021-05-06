<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255)->nullable(false);
            $table->string('napravlenie', 255)->nullable(false);
            $table->text('opisanie')->nullable(false);
            $table->string('telephone', 255)->nullable(false);
            $table->string('deadline', 255)->nullable(false);
            $table->string('cost', 255)->nullable(true);
            $table->integer('Zakaz_ID')->nullable(true);
            $table->integer('IspID')->nullable(true);
            $table->integer('status')->nullable(true);



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
        Schema::dropIfExists('orders');
    }
}
