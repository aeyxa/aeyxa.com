@extends('layouts.app')

<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div id="container" class="text-center">


    <div id=aeyxa-red-bar style="margin-bottom:50px;">
        <h1 class="aeyxa">aeyxa</h1>
    </div>


    <div class="col-md-8 col-md-offset-2">

        <div class="row">
            <div class="col-md-4">
                <div class="aeyxa-box aeyxa-box-red">
                    <div class="aeyxa-box-red-top">
                        <span>Note Cards</span>
                    </div>
                    <div class="aeyxa-box-wht-mid">
                        <span>
                            <strong>Create and study your note cards!</strong>
                        </span>

                        <p class="left font-16 aeyxa-box-body">
                            Simple, easy to use note cards, designed for ease of
                            availability, using a mobile friendly design to let
                            you study anywhere! Currently supports private sets
                            to group your note cards together for easy studying.
                        </p>

                        <span>Learn more below!</span>
                    </div>
                    <div class="aeyxa-box-red-bot">
                        <a href="/cards/select">
                            <button class="aeyxa-btn btn-b-w ayx-lg">
                                Explore
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="aeyxa-box aeyxa-box-red">
                    <div class="aeyxa-box-red-top">
                        <span>Wikipedia</span>
                    </div>
                    <div class="aeyxa-box-wht-mid">
                        <span>
                            <strong>Let us create your note cards!</strong>
                        </span>

                        <p class="left font-16 aeyxa-box-body">
                            We can create note cards automatically for you from
                            Wikipedia pages with aeyxabot, our own custom data
                            parsing engine, which uses a self learning algorithm
                            to allow for accuracy growth every day!
                        </p>

                        <span>Learn more below!</span>
                    </div>
                    <div class="aeyxa-box-red-bot">
                        <a href="/crawl">
                            <button class="aeyxa-btn btn-b-w ayx-lg">
                                Explore
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="aeyxa-box aeyxa-box-red">

                    <div class="aeyxa-box-red-top">
                        <span>Secure Chat</span>
                    </div>
                    <div class="aeyxa-box-wht-mid">
                        <span>
                            <strong>Keep your words private!</strong>
                        <span>

                        <p class="left font-16 aeyxa-box-body">
                            Although this feature has
                            <strong>not yet been implemented</strong>,
                            we're planning to release a chat software designed
                            for security and privacy. We hope to provide you
                            with a simple to use point to point encryption chat!
                        </p>

                        <div class="margin-bot-20">Learn more below!</div>
                    </div>
                    <div class="aeyxa-box-red-bot">
                        <button class="aeyxa-btn btn-b-w ayx-lg">
                            Explore
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div id="aeyxa-stealth-md-lg" class="well visible-lg visible-md">
            <span>
                We support full guest authentication, meaning you'll
                never have to register an account to use any of our services!
            </span>
        </div>

        <div id="aeyxa-stealth-sm-xs" class="well visible-sm visible-xs">
            <span>
                We support full guest authentication, meaning you'll
                never have to register an account to use any of our services!
            </span>
        </div>
    </div>
</div>
@endsection
