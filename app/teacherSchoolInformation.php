<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherSchoolInformation extends Model
{
    const created_at = 'recruted_date';
    const updated_date = 'updated_date';
    protected $guarded = [];
    public $timestamps = true;
}