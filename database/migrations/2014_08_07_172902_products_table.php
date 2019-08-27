<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name');
            $table->string('category');
            $table->longText('description');
            $table->string('short_description');
            $table->string('webPath');
            $table->string('image');
            $table->decimal('price')->nullable();
            $table->decimal('weight')->nullable();
            $table->date('created_at'); //required by Voyager
            $table->date('updated_at'); //required by Voyager
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
