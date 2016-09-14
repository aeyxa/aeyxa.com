<?php

namespace App\Http\Controllers;

use DB;
use App\Set;
use App\Urls;
use App\Card;
use App\Regex;
use App\Trash;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUrlRequest;
use App\Http\Requests\QuestionMarkRequest;
use App\Http\Requests\CreateSetAndCardRequest;



class CreateController extends Controller
{

	public function url(CreateUrlRequest $request)
	{
		$url = new Urls;

		$url->url = $request->url;
		$url->ip = $request->ip();

		$url->save();

		return redirect('/delay');
	}

	public function card(Request $request)
	{
		// Get user IP Address
		$ip = $request->ip();

		// Get last set name under the Trash table
		$last_T = Trash::whereIp($ip)
			->orderBy('created_at', 'desc')->first();

		// Get last set name under the Card table
		$last_C = Card::whereIp($ip)
			->orderBy('created_at', 'desc')->first();

		// If Card was created after Trash, use Card, otherwise, use Trash.
		if($last_T != "" && $last_C != "")
		{
			if($last_T->created_at->lt($last_C->created_at))
			{
				 $last = $last_C->Set;
			}
			else
			{
				$last = $last_T->Set;
			}
		}
		elseif($last_T == "" && $last_C != "")
		{
			$last = $last_C;
		}
		elseif($last_C == "" && $last_T != "")
		{
			$last = $last_T;
		}
		else
		{
			return redirect('/crawl')
			->with('flash-message','<h4>Oops!</h4><p style="color:red;font-size:12px;">It appears nothing has been created, if you continue to receive this error <a href="/about/aeyxabot" target="_blank">please read panel 7.</a></p>');
		}
		// Here we're getting the actual note cards that we display
		$cards = Card::orderBy('created_at', 'desc')
			->whereSet($last)->simplePaginate(1);

		// Here we're grabbing the same cards to be used as a counter
		$count_cards = Card::orderBy('created_at', 'desc')
			->whereSet($last)->get();

		// Here we're grabbing all the trash sentences
		$trash = Trash::orderBy('created_at', 'desc')
			->whereSet($last)->get();

		// Here we're combining the counter to display a total to user
		$count = count($count_cards)+count($trash);

		// Display page
		return view('wiki.display', compact('cards','trash','count', 'set'));
	}

    public function update(QuestionMarkRequest $request, $id)
    {
		// Update Card
		$card = Card::find($id);
        
		$card->Front = $request->Front;

        $card->save();

		// Push to Python
		$regex = new Regex;

		$regex->Sentence = $card->Back;
		$regex->Match = $card->Front;
		$regex->Priority = 0;

		$regex->save();

        return back();
    }

	public function learn(QuestionMarkRequest $request, $id)
    {
		// Find Trash ID then push to python
		$trash = Trash::find($id);

		$regex = new Regex();

		$regex->Sentence = $trash->Sentence;
		$regex->Match = $request->Front;
		$regex->Priority = 0;

		$regex->save();

		$card = new Card();

		$card->Front = $request->Front;
		$card->Back = $trash->Sentence;
		$card->Set = $trash->Set;
		$card->ip = $trash->ip;
		$card->Priority = 0;

		$card->save();

		$trash->delete();

        return back();
    }

	public function random(Request $request)
	{
		$random = 'https://en.wikipedia.org/wiki/Special:Random';

		$url = new Urls;

		$url->url = $random;
		$url->ip = $request->ip();

		$url->save();

		return redirect('/delay');
	}

	public function create(CreateSetAndCardRequest $request)
	{
		$ip = $request->ip();

		$card = new Card($request->input());
		$set = new Set();


		$card->ip = $ip;
		$set->ip = $ip;
		$set->Title = $request->Set;
		$card->save();
		$set->save();

		return back();
	}

	public function delete(Request $request, $id)
	{
		$ip = $request->ip();

		$card = Card::whereIp($ip)->whereId($id)->first();

		$card->delete();

		$count_cards = Card::whereIp($ip)->whereSet($card->Set)->get();

		if(count($count_cards) == 0)
		{
			Set::whereIp($ip)->whereTitle($card->Set)->delete();

			return redirect('/cards/select');
		}
		else
		{
			return back();
		}

	}
}
