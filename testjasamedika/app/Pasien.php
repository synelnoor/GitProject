<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $timestamps = false;
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
