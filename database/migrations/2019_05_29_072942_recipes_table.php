<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name')->unique();
            $table->longText('description');
            $table->double('preparationTime');
            $table->double('cookingTime');
            $table->longtext('ingredients');
            $table->longtext('method');
            $table->string('webPath');
            $table->string('image');
            $table->string('thumbImagePath');
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
        Schema::dropIfExists('recipes');
    }
}
