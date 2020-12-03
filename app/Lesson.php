<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class Lesson extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}