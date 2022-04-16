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
        Schema::create('updates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_update');
            $table->integer('user_delete');
            $table->integer('product_create');
            $table->integer('product_update');
            $table->integer('product_delete');
            $table->integer('order_create');
            $table->integer('order_delete');
            $table->integer('contact_create');
            $table->integer('contact_update');
            $table->integer('contact_delete');
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
        Schema::dropIfExists('updates');
    }
};
