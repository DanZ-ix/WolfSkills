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
            $table->integer('order_id');
            $table->string('order_name', 255);
            $table->integer('isp_id');
            $table->integer('zakaz_id');
            $table->integer('accepted');
            $table->text('text');
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
        Schema::dropIfExists('orders_requests');
    }
}
