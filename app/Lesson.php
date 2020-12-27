<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class Lesson extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function students()
    {
        return $this->hasMany("App\Students");
    }

    public function studentsSchoolInformation()
    {
        return $this->hasMany("App\StudentsSchoolInformation");
    }

    public function teachers()
    {
        return $this->hasMany("App\Teachers", "teacher_id");
    }

    public function lessonContent()
    {
        return $this->hasMany("App\CourseContent");
    }
}