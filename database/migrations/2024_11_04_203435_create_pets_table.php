<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->string('birthdate');
            $table->string('race');
			$table->string('sex');
			$table->string('food');
			$table->string('weight');
			$table->string('necklace');
			$table->string('necklace_details');
			$table->string('is_aggressive');
			$table->string('is_aggressive_details');
			$table->biginteger('client_id');
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
        Schema::dropIfExists('pets');
    }
}
