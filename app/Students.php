<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function lesson()
    {
        return $this->belongsTo("App\Lesson");
    }

    public function studentsSchoolInformation()
    {
        return $this->hasOne("App\StudentsSchoolInformation", "student_id");
    }
}