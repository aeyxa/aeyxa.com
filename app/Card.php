<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $fillable = ['Set','Front','Back','Priority','ip','created_at', 'user'];

    public $table = "card";

    public function scopeAuthor($query)
    {
        if(Auth::check())
        {
            $user = \Auth::user()->email;

            return $query->whereUser($user);
        }
        else
        {
            $ip = \Request::ip();

            return $query->whereIp($ip);
        }
    }
}
