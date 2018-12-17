<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitsTable extends Migration
{
    public function up()
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('category', 50);
            $table->text('description')->nullable();
            $table->tinyInteger('frequency');
            $table->string('period', 15);
            $table->text('motivation')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('habits');
    }
}
