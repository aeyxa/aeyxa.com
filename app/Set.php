<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
	protected $fillable = ['Title','ip'];

    public $table = "set";

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
