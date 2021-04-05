<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_product', function (Blueprint $table) {
            $table->integer('phone_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('phone_id')
                ->references('id')
                ->on('phones')
                ->onDelete('cascade'); 
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_products');
    }
}
