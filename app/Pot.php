<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    protected $fillable = [
        'name', 'comments', 'systemID'
    ];
}
