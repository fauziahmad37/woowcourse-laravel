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
        Schema::create('actionlog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user', 20)->nullable();
            $table->string('ipadd', 20)->nullable();
            $table->timestamp('logtime', 6)->nullable()->default('now');
            $table->text('logdetail')->nullable();
            $table->string('info', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actionlog');
    }
};
