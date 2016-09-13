@extends('layouts.app')

<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div id="container">

    <div id="aeyxa-notecard-bar" class="aeyxa">
        <span>Cards</span>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="aeyxa-box aeyxa-box-blk center">
            <div class="aeyxa-box-blk-top">
                <span class="font-22">Information</span>
            </div>
            <div class="aeyxa-box-wht-mid">
                <p class="left font-16 aeyxa-box-body">
                    <span class="font-30">
                        <strong>Getting Started</strong>
                    </span>
                    <br>
                    You will start by creating a set name, as a way to group
                    your note cards together. Once you've chosen a set title,
                    you'll be able specify cards to be created under that set
                    name. All cards belonging to one set will be shown when you
                    select them on this page. If this is the first time you've
                    come to this page, you will not see any note card sets below.
                    You will be able to move back and forth between the cards in
                    the sets. In order to flip the card, you will click or tap
                    the card. To keep your screen clean, we've placed our options
                    button for the study page at the bottom of the page. In
                    the options menu, you will be able to edit cards, delete
                    them, and return to the beginning of the set.
                    <br><br>
                    <span class="font-30">
                        <strong>Wikipedia</strong>
                    </span>
                    <br>
                    Optionally, you can use our Wikipedia application to create
                    your note cards for you automatically as a way to test out
                    our services before investing the time into creating a set!
                    It's quick an easy to use, if you choose to try that first,
                    you may either go back and select the "Explore" button found
                    under the "Wikipedia" information box. Or, you can also click
                    the "Wikipedia" button found in the navigation bar at the
                    top of this page. The benefits of using our Wikipedia parser
                    are easy of use, easily able to create thousands of note cards
                    per second.

                    <br><br>
                    <span class="font-30">
                        <strong>Compatibility</strong>
                    </span>
                    <br>

                    Although we are always trying to improve are compatibility,
                    our website functions best on mobile devices. Most of our
                    websites styling is specifically designed to make it easy to
                    navigate using a small screen. If you are using a desktop to
                    do most of your studying, that's fine too. However, there
                    are a few things we'd like to make you aware of. In terms of
                    desktop compatibility, our website is tested against Google
                    Chrome and some specific settings do not render on other
                    web browsers. For this reason, while using our website on a
                    desktop, we recommend Google Chrome. Should our compatibility
                    change, we will update this page here, and our about page.

                    <br><br>
                    <span class="font-30">
                        <strong>Issues</strong>
                    </span>
                    <br>

                    There a couple known issues. The primary one we'd like to
                    make you aware of, is if the title of the set has a '/' in
                    it, then you will be unable to view it here. There is no
                    work around for this yet, we will update this as additional
                    information becomes available.
                </p>
            </div>
            <div class="aeyxa-box-blk-bot">
                <button class="aeyxa-btn ayx-lg btn-r-w">
                    Learn More!
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="aeyxa-box aeyxa-box-blk center">
                    <div class="aeyxa-box-blk-top">
                        <span>Create Cards</span>
                    </div>
                    <div class="aeyxa-box-wht-mid">
                        <p class="font-16 aeyxa-box-body">
                            Select the button below to create!
                        </p>
                    </div>
                    <div class="aeyxa-box-blk-bot">
                        <a href="/cards/create">
                            <button class="aeyxa-btn ayx-lg btn-r-w">
                                Create
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @foreach($sets as $set)
                <div class="col-md-4">
                    <div class="aeyxa-box aeyxa-box-blk center">
                		<div class="aeyxa-box-blk-top">
                			<span>{{ $set->Title }}</span>
                		</div>
                		<div class="aeyxa-box-wht-mid">
                            <p class="font-16 aeyxa-box-body">
                                Select the button below to study!
                            </p>
                		</div>
                		<div class="aeyxa-box-blk-bot">
                            <a href="/cards/{{ $set->Title }}/study">
        			             <button class="aeyxa-btn ayx-lg btn-r-w">
                                     Study
                                 </button>
                            </a>
                		</div>
                	</div>
                </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
