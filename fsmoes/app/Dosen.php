<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //

    public $timestamps = false;
    protected $fillable = ['nama', 'img'];
    protected $table = 'dosen';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
