<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_completed');

            $table->integer('habit_id')->unsigned();
            $table->foreign('habit_id')->references('id')->on('habits')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
