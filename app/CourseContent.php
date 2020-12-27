<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function lesson()
    {
        return $this->belongsTo("App\Lesson");
    }
}