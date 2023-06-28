<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('full_name', 50);
            $table->string('gender', 10);
            $table->string('address',100);
            $table->string('phone',20);
            $table->string('rfc',13);
            $table->string('reason', 100);
            $table->string('regime', 100);
            $table->string('cfdi_use', 100);
            $table->string('postal_code', 10);
            $table->string('email', 80)->nullable();
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}