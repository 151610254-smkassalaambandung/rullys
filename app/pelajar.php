<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajar extends Model
{
    //
    protected $table = 'pelajars';
    protected $fillable = ['nama','alamat','jk'];
    protected $visible = ['nama','alamat','jk'];
    public $timestamp = true;
}
