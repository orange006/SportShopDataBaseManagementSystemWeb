<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration {
    public function up() {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger("IdProv");
            $table->date("DateSupply");
        });
    }

    public function down() {
        Schema::dropIfExists('supplies');
    }
}
