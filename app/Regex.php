<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regex extends Model
{
    protected $fillable = ['Sentence','Match','Regex','Priority'];

	public $table = "regex";
}
