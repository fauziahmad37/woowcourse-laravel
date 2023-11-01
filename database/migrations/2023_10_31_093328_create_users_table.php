<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('userid');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('password');
            $table->integer('user_level');
            $table->timestamp('last_login', $precision = 0);
            $table->integer('active');
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
