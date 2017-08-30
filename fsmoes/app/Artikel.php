<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $timestamps = false;
    protected $fillable = ['judul', 'img'];
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
