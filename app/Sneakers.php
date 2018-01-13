<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sneakers extends Model
{
    //
    protected $fillable=[
        'name'
    ];
    protected $table = 'sneakerss';
}
