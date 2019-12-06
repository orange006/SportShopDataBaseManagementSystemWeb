<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger("IdSuppl");
            $table->string("NameProduct", 35);
            $table->string("TypeProduct", 25);
            $table->unsignedBigInteger("CostPurchase");
            $table->unsignedBigInteger("CostSale");
            $table->boolean("Availability");
            $table->unsignedBigInteger("Quantity");

            $table->foreign('IdSuppl')
                ->references('id')
                ->on('supplies');
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
}
