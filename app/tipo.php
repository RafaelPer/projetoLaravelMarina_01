<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    protected $table = 'tipos';
    protected $fillable = ['nome'];
}
