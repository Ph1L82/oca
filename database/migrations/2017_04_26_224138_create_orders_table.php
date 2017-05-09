<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->string('description')->nullable();
            $table->integer('author')->unsigned();
            $table->integer('approved_by')->unsigned()->nullable();
            $table->timestamp('approved')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('author')->references('id')->on('users');
            $table->foreign('approved_by')->references('id')->on('users');
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
