<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger("IdProd");
            $table->unsignedBigInteger("IdEmpl");
            $table->unsignedBigInteger("IdCust");
            $table->string("DateOrder", 11);

            $table->foreign('IdProd')
                ->references('id')
                ->on('products');

            $table->foreign('IdEmpl')
                ->references('id')
                ->on('employees');

            $table->foreign('IdCust')
                ->references('id')
                ->on('customers');
        });
    }

    public function down() {
        Schema::dropIfExists('orders');
    }
}
