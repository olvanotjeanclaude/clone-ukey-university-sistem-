<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchoolInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_school_information', function (Blueprint $table) {
            $table->id();
            $table->integer("lesson_id")->unsigned();
            $table->integer("student_id")->unsigned();
            $table->boolean("isInSystem")->default(true);
            $table->string("status")->nullable()->default("clean");
            $table->string("transcript")->nullable();
            $table->string("diplome")->nullable();
            $table->string("others")->nullable();
            $table->text("description")->nullable();
            $table->timestamps();
            $table->foreign('lesson_id')->references('id')->on('App\Lesson')
                ->onDelete('cascade')
                ->onUpdate("cascade");
            $table->foreign('student_id')->references('id')->on('App\Students')
                ->onDelete('cascade')
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_school_information');
    }
}