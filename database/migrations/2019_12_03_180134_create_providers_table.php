<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration {
    public function up() {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("NameProvider", 75);
            $table->string("Representative", 100);
            $table->string("PhoneNumberProvider", 13);
        });
    }

    public function down() {
        Schema::dropIfExists('providers');
    }
}
