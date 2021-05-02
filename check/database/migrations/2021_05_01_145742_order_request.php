<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_requests', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('order_id')->nullable(false);
            $table->integer('isp_id')->nullable(false);
            $table->integer('zakaz_id')->nullable(false);
            $table->integer('accepted');

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
        //
    }
}