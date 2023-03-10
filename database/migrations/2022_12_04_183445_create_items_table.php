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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner_id');
            $table->boolean('status')->default(0);
            $table->string('categories_id');
            $table->text('text');
            $table->text('info');
            $table->string('main_image');
            $table->string('images');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('old_price');
            $table->string('new_price');
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
        Schema::dropIfExists('items');
    }
};
