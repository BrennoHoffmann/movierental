<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "filme";
    protected $primaryKey = "filme_id";
    public $timestamps = false;
}
