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
            $table->increments('userid');
            $table->string('first_name', 50)->nullable();
            $table->string('password')->nullable();
            $table->smallInteger('user_level')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->smallInteger('active')->nullable();
            $table->text('photo')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->timestamp('created_at')->nullable();
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
