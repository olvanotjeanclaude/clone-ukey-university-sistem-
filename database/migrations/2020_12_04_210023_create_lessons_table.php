<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("code");
            $table->integer("ects");
            $table->integer("akts");
            $table->integer("theory");
            $table->integer("application");
            $table->integer("laboratory");
            $table->integer("credit");
            $table->text("purpose");
            $table->text("resource");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}