<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
	protected $fillable = ['Title','ip'];

    public $table = "set";
}
