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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->string('phone')->nullable();
            $table->string('phone_verified_at')->nullable();
            $table->string('coupons')->default('[]');
            $table->boolean('is_admin')->default(0);
            $table->string('temp_key')->nullable();
            $table->string('phone_temp_key')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->integer('money')->default(0);
            $table->integer('bonuses')->default(100);
            $table->string('avatar')->default('avatar.png');
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
        Schema::dropIfExists('users');
    }
};
