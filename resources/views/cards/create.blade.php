@extends('layouts.app')

<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div id="container">

    <div class="col-md-4 col-md-offset-4">
        <div class="well form-group">
            <h2 class="center">Note Card Creation</h2>

            <br>

            <form method="POST" action="/cards/create">{{ csrf_field() }}
                <span class="left">Set</span>

                @if($set != "")
                    <input name="Set" class="form-control"
                    placeholder="Set for card" value="{{ $set->Title }}">
                @else
                    <input name="Set" class="form-control"
                    placeholder="Set for card">
                @endif

                <br>

                <span class="left">Front</span>
                <input name="Front" class="form-control"
                placeholder="Front of card" autofocus>

                <br>

                <span class="left">Back</span>
                <input name="Back" class="form-control"
                placeholder="Back of card">

                <br>

                <input type="hidden" name="Priority" class="form-control"
                value="0">

                <br>

                <button type="reset" class="btn btn-default pull-left">
                    Clear
                </button>

                <button type="submit" class="btn btn-primary pull-right">
                    Submit
                </button>

                <br>
            </form>
        </div>
    </div>

</div>

@endsection
