<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemorandumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorandums', function (Blueprint $table) {
            $table->id();
			$table->string('invoice');
			$table->datetime('start_date');
			$table->datetime('finish_date');
			$table->text('goal');
			$table->text('address');
			$table->enum('status', ['in-progress','success', 'cancelled', 'refused']);
			$table->integer('owner_id');
			$table->integer('client_id');
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
        Schema::dropIfExists('memorandums');
    }
}
