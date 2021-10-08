<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsPerformedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_performed', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time');
            $table->unsignedBigInteger('test_scheduled_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('test_scheduled_id')->references('id')->on('tests_scheduled')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_performed');
    }
}
