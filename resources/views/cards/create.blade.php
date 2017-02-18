@extends('layouts.app')

<link href="/css/create.css" rel="stylesheet">

@section('content')
<div id="container">

    <div class="col-md-6 col-md-offset-3 hidden-xs">
        <div class="create-box">
            <div class="create-box_title">
                <span>Note Card Creation</span>
            </div>

            <hr>

            <form method="POST" action="/cards/create">{{ csrf_field() }}

                <div class="create-box_input">
                    @if($set != "")
                        <input name="Set" class="form-control"
                        placeholder="Set" value="{{ $set->Title }}">
                    @else
                        <input name="Set" class="form-control"
                        placeholder="Set">
                    @endif
                </div>

                <div class="create-box_input">
                    <textarea name="Front" class="form-control"
                    placeholder="Front" autofocus></textarea>
                </div>

                <div class="create-box_input">
                    <textarea name="Back" class="form-control"
                    placeholder="Back of card"></textarea>
                </div>

                <div class="create-box_input">
                    <input type="hidden" name="Priority" class="form-control"
                    value="0">
                </div>

                <div class="create-box_input">
                    <button type="reset" class="btn btn-default pull-left">
                        Clear
                    </button>

                    <button type="submit" class="btn btn-primary pull-right">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <a href="/crawl">
            <div class="wikipedia-box">
                Create note cards automatically from Wikipedia
            </div>
        </a>
    </div>

    <div class="col-md-8 col-md-offset-2 visible-xs">
        <div class="create-box-xs">
            <div class="create-box_title-xs">
                <span>Note Card Creation</span>
            </div>

            <hr>

            <form method="POST" action="/cards/create">{{ csrf_field() }}

                <div class="create-box_input">
                    @if($set != "")
                        <input name="Set" class="form-control"
                        placeholder="Set" value="{{ $set->Title }}">
                    @else
                        <input name="Set" class="form-control"
                        placeholder="Set">
                    @endif
                </div>

                <div class="create-box_input">
                    <textarea name="Front" class="form-control"
                    placeholder="Front" autofocus></textarea>
                </div>

                <div class="create-box_input">
                    <textarea name="Back" class="form-control"
                    placeholder="Back of card"></textarea>
                </div>

                <div class="create-box_input">
                    <input type="hidden" name="Priority" class="form-control"
                    value="0">
                </div>

                <div class="create-box_input">
                    <button type="reset" class="btn btn-default pull-left">
                        Clear
                    </button>

                    <button type="submit" class="btn btn-primary pull-right">
                        Submit
                    </button>
                    <div style="clear: both;"></div>
                </div>
            </form>
        </div>
        <a href="/crawl">
            <div class="wikipedia-box-xs">
                Create note cards automatically from Wikipedia
            </div>
        </a>
    </div>

</div>

@endsection
