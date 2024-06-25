<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_kain');
            $table->integer('height');
            $table->integer('shoulder');
            $table->integer('chest');
            $table->boolean('arm');
            $table->integer('upper_arm');
            $table->integer('bottom_arm');
            $table->integer('bottom_width');
            $table->integer('model');
            $table->integer('cloth_model');
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
        Schema::dropIfExists('custom_products');
    }
}
