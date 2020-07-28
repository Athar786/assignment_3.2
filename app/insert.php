<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert extends Model
{
    protected $table = 'insert';
    protected $fillable = ['name','mobile','address'];
}
