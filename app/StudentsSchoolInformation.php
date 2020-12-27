<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsSchoolInformation extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function teachers()
    {
        return $this->belongsTo("App\Teachers");
    }

    public function lesson()
    {
        return  $this->belongsTo("App\Lesson");
    }

    public function students()
    {

        return  $this->belongsTo("App\students", "student_id");
    }
}