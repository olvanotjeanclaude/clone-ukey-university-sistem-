<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class Classes extends Model
{
    protected $guarded = [];
    public $timestamps = true;
}