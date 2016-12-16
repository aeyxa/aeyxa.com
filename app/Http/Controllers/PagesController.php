<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Set;
use App\Card;
use App\User;
use App\Trash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class PagesController extends Controller
{
    public function crawl()
    {
        return view('wiki.crawl');
    }

    public function about()
    {
        return view('about.about');
    }

    public function aeyxabot()
    {
        return view('about.aeyxabot');
    }

    public function creation(Request $request)
    {
        $set = "";
        return view('cards.create',compact('set'));
    }

    public function select(Guard $auth, Request $request)
    {
        $ip = $request->ip();

        $cards = Card::author()->orderBy('created_at', 'desc')->get();
        $sets = Set::author()->orderBy('created_at', 'desc')->get();

        return view('cards.select',compact('ip','sets','cards'));
    }

    public function study(Guard $auth, Request $request, $set)
    {
        if(Auth::check())
        {
            $user = $auth->user()->email;

            $cards = Card::orderBy('Priority')
                ->whereUser($user)->whereSet($set)->simplePaginate(1);
        }
        else
        {
            $ip = $request->ip();

            $cards = Card::orderBy('Priority')
                ->whereIp($ip)->whereSet($set)->simplePaginate(1);
        }

        $count_cards = Card::orderBy('created_at', 'desc')
            ->whereSet($set)->get();

        $trash = Trash::orderBy('created_at', 'desc')
            ->whereSet($set)->get();

        $count = count($count_cards)+count($trash);

        if(count($count_cards) == 0)
        {
            if(Auth::check())
            {
                Set::whereUser($user)->whereTitle($set)->delete();
            }
            else
            {
                Set::whereIp($ip)->whereTitle($set)->delete();
            }
            return back();
        }
        else
        {
            return view('cards.study', compact('cards','count','trash','set'));
        }
    }

    public function delay()
    {
        return view('wiki.delay');
    }

    public function shuffle(Guard $auth, Request $request, $set)
    {
        $ip = $request->ip();

        $cards = Card::whereIp($ip)->whereSet($set)->get();

        foreach($cards as $card)
        {
            $card->Priority = rand();
            $card->save();
        }

        $cards = Card::orderBy('Priority')->whereIp($ip)->whereSet($set);

        return back();
    }
}
