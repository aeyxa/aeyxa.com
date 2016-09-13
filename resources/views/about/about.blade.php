@extends('layouts.app')

<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div id="container" class="center">
    <div id="aeyxa-blu-bar">
        <h1 class="aeyxa">about</h1>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="aeyxa-box aeyxa-box-blu">
            <div class="aeyxa-box-blu-top">
                <span>Information</span>
            </div>
            <div class="aeyxa-box-wht-mid">
                <p class="left aeyxa-box-body">
                    <span class="font-30">
                        Overview
                    </span>
                    <br>
                    This website, aeyxa.com, is used as a storage bin for
                    multiple self projects. The first project to be released
                    was the note cards application, allowing users to create
                    note cards and sets. The second project, integrated a web
                    crawler and data parser named "aeyxabot" to be used for the
                    creation of note cards from Wikipedia. The third project not
                    yet released, is the secure chat software which there is
                    currently no release date for.
                    <br><br>
                    <span class="font-30">
                        Note Cards
                    </span>
                    <br>
                    The note cards application is designed for easy of use and
                    mobility in mind. In minutes, you're able to create multiple
                    cards and begin studying right away. Currently, you are not
                    able to create sets that have spaces or certain special
                    characters in them. This is because the set names are used
                    in the url in which the set is being displayed. Originally,
                    there were many options in which you could order and share
                    your note cards. To keep the website simple and easy to use
                    we've scaled down some of these custom options. An example
                    of some options that have been deprecated are the ability to
                    make note cards as public sets to share them with others.
                    We've also deprecated the ability to store note cards under
                    a user account, as to not prevent users who wish not to
                    register from being able to gain full access to the website.
                    There may be future improvements on the available options to
                    all types of users, but at this time our main goal is to
                    always keep ease of use and simplicity in mind.
                    <br><br>
                    <span class="font-30">
                        aeyxabot
                    </span>
                    <br>
                    The automatic Wikipedia note card application, "aeyxabot",
                    is designed to make things even easier. If note cards are
                    being created from Wikipedia, you will likely be copying
                    each sentence in. We realized we could create an program
                    that does this for us. The set is named after the title of
                    the Wikipedia page it is searched. Then, each sentence of
                    the page is cycled over looking for ones it understands.
                    Upon a successful match, it creates the note cards for you.
                    The ones it is unable to find are push into a recycle/trash
                    bin where users may choose to create cards out of them. If
                    the user does not add words that are not present, aeyxabot
                    will be able to learn how it was supposed to break apart
                    that sentence. The more people create cards from their
                    recycle bins, aeyxabot will continue to learn and grow. At
                    this point in time there are known bugs which are currently
                    being considered minor inconveniences, such as the inability
                    to distinguish between prefixes such as "Mr." and the end of
                    a sentence. These issues will be addressed in the future but
                    for now we're directing our attention towards our next goal.
                    Detailed information regarding aeyxabot
                    <a href="/about/aeyxabot" target="_blank">
                        can be found here.
                    </a>
                    <br><br>
                    <span class="font-30">
                        Secure Chat
                    </span>
                    <br>
                    The chat application designed with privacy and security as
                    it's number one priority. The application will be capable of
                    keeping all traffic between two users encrypted. As with all
                    of our applications, simplicity and easy of use will be our
                    goal. We hope to make the process as easy as installing and
                    specifying who you wish to talk to, nothing more! Starting
                    with support for Linux, we will begin moving towards web
                    support which will allow any operating system to hold their
                    private conversations easily. There is currently no release
                    date available for the secure chat software.
                </p>
            </div>
            <div class="aeyxa-box-blu-bot">
                <a href="/">
                    <button class="aeyxa-btn btn-b-w ayx-sm">
                        Exit
                    </button>
                </a>
            </div>
        </div>
    </div>

</div>


@endsection
