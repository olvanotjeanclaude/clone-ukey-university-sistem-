<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSchoolInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_school_information', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("teacher_id");
            $table->boolean("isInSystem")->default(true);
            $table->string("status")->nullable()->default("clean");
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
        Schema::dropIfExists('teacher_school_information');
    }
}