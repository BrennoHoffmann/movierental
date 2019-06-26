<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "cliente";
    protected $primaryKey = "cliente_id";
    public $timestamps = false;
}
