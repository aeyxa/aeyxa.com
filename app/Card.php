<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $fillable = ['Set','Front','Back','Priority','ip','created_at'];

    public $table = "card";
}
