<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer("lesson_id")->unsigned();
            $table->string("surname");
            $table->string("lastname");
            $table->date("birthday");
            $table->char("gender");
            $table->string("email");
            $table->string("telephone");
            $table->string("address")->nullable();
            $table->foreign('lesson_id')->references('id')->on('App\Lesson')
                ->onDelete('cascade')
                ->onUpdate("cascade");
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
        Schema::dropIfExists('students');
    }
}