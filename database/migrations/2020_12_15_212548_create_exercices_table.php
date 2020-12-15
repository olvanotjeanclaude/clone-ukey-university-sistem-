<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("type", 50);
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->integer("total");
            $table->decimal("folderLenght")->comment("KB,MB")->nullable();
            $table->text("deliver_desciption")->nullable();
            $table->string("help_folder")->nullable();
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
        Schema::dropIfExists('exercices');
    }
}