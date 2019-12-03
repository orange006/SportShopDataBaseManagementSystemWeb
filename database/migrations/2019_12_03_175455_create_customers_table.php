<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {
    public function up() {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("FullNameCustomers", 100);
            $table->string("PhoneNumberCustomers", 13);
        });
    }

    public function down() {
        Schema::dropIfExists('customers');
    }
}
