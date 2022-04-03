<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type_id') -> references('id')->on('product_type');
            $table->string('brandname');
            $table->string('pic_url');
            $table->unsignedInteger('price');
            $table->boolean('available');
            $table->unsignedInteger('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_type');
    }
};
