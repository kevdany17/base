<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('stock_min');
            $table->string('productCode', 15)->nullable();
            $table->string('unitCode', 10)->nullable();
            $table->integer('category_id');
            $table->integer('unit_id');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });

		DB::unprepared('
            CREATE TRIGGER insert_product_to_inventories_trigger AFTER INSERT ON products
            FOR EACH ROW
            BEGIN
                INSERT INTO inventories (product_id, office_id)
                SELECT NEW.id AS product_id, id AS office_id
                FROM offices;
            END
        ');

		DB::unprepared('
            CREATE TRIGGER insert_office_to_inventories_trigger AFTER INSERT ON offices
            FOR EACH ROW
            BEGIN
                INSERT INTO inventories (product_id, office_id)
                SELECT id AS product_id, NEW.id AS office_id
                FROM products;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		DB::unprepared('DROP TRIGGER IF EXISTS insert_product_to_inventories_trigger');
		DB::unprepared('DROP TRIGGER IF EXISTS insert_office_to_inventories_trigger');
        Schema::dropIfExists('products');
    }
}
