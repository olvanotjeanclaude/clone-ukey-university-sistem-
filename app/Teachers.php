<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function students()
    {
        $this->hasMany("\App\Students", "student_id");
    }
}