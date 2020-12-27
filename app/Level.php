<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function classes()
    {
        $this->hasMany("App\Classes");
    }
}