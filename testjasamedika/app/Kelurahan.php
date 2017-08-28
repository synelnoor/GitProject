<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    public $timestamps = false;
    protected $table = 'kelurahan';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
