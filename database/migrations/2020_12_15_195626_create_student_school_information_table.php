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
            $table->timestamps();
            $table->foreignId("student_id");
            $table->boolean("isInSystem")->default(true);
            $table->string("status")->nullable()->default("clean");
            $table->string("transcript")->nullable();
            $table->string("diplome")->nullable();
            $table->string("others")->nullable();
            $table->text("description")->nullable();
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