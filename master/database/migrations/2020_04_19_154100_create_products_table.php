<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id();
            $table->string('kode_product', 4)->unique();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('material');
            $table->string('link_video')->nullable();
            $table->integer('price');
            $table->integer('price_discount')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
