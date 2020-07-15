<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sample extends Model
{
    //
    protected  $table = 'sample';

    protected $guarded = array('id');

    public $timestamps = true;
  
    protected $fillable = [
        'name',
    ];
  
}
