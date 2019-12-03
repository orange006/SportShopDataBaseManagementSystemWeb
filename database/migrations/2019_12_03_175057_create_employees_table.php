<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {
    public function up() {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("FullNameEmployee", 100);
            $table->string("Position", 50);
            $table->unsignedBigInteger("Age");
            $table->string("PhoneNumberEmployee", 13);
        });
    }

    public function down() {
        Schema::dropIfExists('employees');
    }
}
