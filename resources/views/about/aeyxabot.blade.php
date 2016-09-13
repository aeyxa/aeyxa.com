@extends('layouts.app')

<link rel="stylesheet" href="/css/cardStyle.css">
<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div id="container" v-cloak><div style="text-align:center">

	<!-- Title bar section -->
	<div class="blackBar"></div>

	<div id="aeyxabot-red-bar">
		<h1 class="Title">
			aeyxabot
		</h1>

		<h2 class="subTitle">
			Web Crawler | Data Parser
		</h2>
	</div>

	<div class="blackBar"></div>

	<br><br>

	<!-- not used -->
	<div class="col-md-3"></div>


	<!-- Content goes here -->
	<div class="col-md-6">
		<h3>
			<strong>Welcome to the about page for aeyxabot!</strong>
		</h3>

		<br><br>

		<div class="panel-group">

			<!-- Panel #1 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box1">
							What is aexyabot?
						</a>
					</h4>
				</div>

				<div id="box1" class="panel-collapse collapse in">

					<div class="panel-body">

					<h5>
						The main purpose of aeyxabot is to create note cards
						automatically.
					</h5>

					<br>

						<p class="left">
							Most people creating note cards will be creating
							them by copying from a website, document file, or
							other means of text from the internet. From our
							experiences, it's becoming less common that people
							need to use books for the purposes of learning. We
							hope to make the process of learning easier, we can
							help do this by preventing the need to copy paste
							sentences into text fields. As of the current date:
							08/26/2016 aeyxabot is beginning it's enterance as a
							program capable of parsing data from Wikipedia.
						</p>

					</div>
				</div>
			</div>


			<!-- Panel #2 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><a data-toggle="collapse" href="#box2">
					What is coming next?</a></h4>
				</div>

				<div id="box2" class="panel-collapse collapse">

					<div class="panel-body">

						<h5>
							Wikipedia database integration.
						</h5>

						<br>

						<p class="left">
							Currently, aeyxabot reaches out over the internet
							and grabs content from a specified url given by the
							user. However, Wikipedia makes it's database open
							and readily available with monthly database dumps.
							Read more about Wikipedia's monthly, historical and
							current database dumps

							<a href="https://en.wikipedia.org/wiki/
							Wikipedia:Database_download">
								here.
							</a>

							The database will be added to our website, and
							sorted in a way that will make serving content
							easier. At that point, aeyxabot will cease allowing
							users to crawl Wikipedia. By default, when users
							enter a url, it will search in its database instead.
							Crawling will only be allowed through an advanced
							search.
						</p>

					</div>
				</div>
			</div>


			<!-- Panel #3 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box3">
							How intelligent is aeyxabot?
						</a>
					</h4>
				</div>

				<div id="box3" class="panel-collapse collapse">

					<div class="panel-body">

						<h5>
							At best, it's the lowest form of machine learning.
						</h5>

						<br>

						<p class="left">
							While I would like to say that it's the most
							intelligent piece of software every created, it's
							not. It relies on the users to teach it how to
							improve by creating new regular expressions. By
							default, aeyxabot comes with only a small amount of
							built in regular expressions, and has no real
							understanding of the english language. As users
							update their note cards and select from the recycle
							bin, it will gain a larger knowledge base to select
							from. However, at this time it is unlikely that we
							will be integrating any real machine learning
							algorithms.
						</p>

					</div>
				</div>
			</div>


			<!-- Panel #4 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box4">
							How can I help make aeyxabot better?
						</a>
					</h4>
				</div>

				<div id="box4" class="panel-collapse collapse">

					<div class="panel-body">

						<h5>
							By updating mistakes and creating cards from the
							discard bin.
						</h5>

						<br>

						<p class="left">
							Thanks for wanting to help make aeyxabot better! The
							way you can help is by continuing to use aeyxabot.
							When you update a card, assuming the words stay the
							same, aeyxabot learns from its mistakes by creating
							a new regular expression. When you select cards from
							the discard bin and update them, aeyxabot will also
							create regular expressions for them. The discard bin
							is the main way that we'll be able to make aeyxabot
							more intelligent. All cards that go to the discard
							bin are cards that aeyxabot completely ignored and
							didn't even try to figure out.
						</p>
					</div>
				</div>
			</div>


			<!-- Panel #5 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box5">
							Why does it take 10 seconds to get my cards?
						</a>
					</h4>
				</div>

				<div id="box5" class="panel-collapse collapse">

					<div class="panel-body">

						<h5>
							To prevent a high volume of database queries,
							aeyxabot is designed to sleep.
						</h5>

						<br>

						<p class="left">
							Every one to ten seconds, aeyxabot wakes up and
							checks to see if there's work for it to do. If there
							are no new URL's being searched it goes to sleep.
							This is to prevent an unnecessary stress to the
							server. If you create a card at the same time as
							someone else, it would actually only take one
							second for aeyxabot to create your cards but the
							website is hardcoded for 11 seconds (although it
							says 10 seconds) to prevent issues with it not
							displaying the right set. If you would like to, you
							can click the "Last Wiki" button in the navigation
							bar and refresh your page until the new note cards
							are ready to be displayed.
						</p>

					</div>
				</div>
			</div>


			<!-- Panel #6 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box6">
							Why did my previous search get displayed?
						</a>
					</h4>
				</div>

				<div id="box6" class="panel-collapse collapse">
					<div class="panel-body">

						<h5>
							Either aeyxabot wasn't ready yet, or it wasn't able
							to create cards from that page.
						</h5>

						<br>

						<p class="left">
							When you search a url, the url gets passed to
							aeyxabot. On the backend its trying to create note
							cards as best it can. However, if no matches are
							made the front end isn't currently configured to
							speak with aeyxabot. It currently will always show
							you the last set you created. If a new set was not
							created, then the last set you did create, will be
							displayed. It's also possible that aeyxabot wasn't
							ready yet and had not displayed the content on the
							page yet. If after a couple refreshes, your last set
							is still displaying, it's safe to say aeyxabot was
							unable to find any matches.
						</p>

					</div>
				</div>
			</div>


			<!-- Panel #7 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box7">
							How exactly does aeyxabot work?
						</a>
					</h4>
				</div>

				<div id="box7" class="panel-collapse collapse">
					<div class="panel-body">

						<h5>
							By matching sentences against regular expessions,
							using Python.
						</h5>

						<br>

						<p class="left">
						We're glad you asked! The main way aeyxabot is able to
						serve your note cards from website urls is thanks to
						beautifulsoup and regular expressions. The first thing
						that aeyxabot does is grab all the text from the page.
						Then, it splits the content up until sentences based on
						the position of periods. Currently, there is no support
						for knowing the difference between "John A. P" and the
						end of the sentence. In future updates we hope to fix
						this minor inconvenience. Once all of the sentences are
						split apart, they're put together into a list. Then a
						list of regular expressions is created by pulling its
						built in default knowledge and regular expressions that
						users have created by updating their cards and teaching
						it through the recycle bin. Each sentence is matched
						against each regular expression. If a match is found, it
						splits the sentence into two groups to be the front and
						the back. The title of the Wikipedia page is obtained to
						be used as the set title for the note cards created from
						that page. Lastly, your IP address is added on as a way
						of indicating who it belongs to. Then once your note
						cards are created. The recycle bin is created by making
						a new list of sentences which are on the content page
						but are not part of your note cards (the sentences it
						was unable to find matches against). Once both lists
						have been created, a thread is started for each item in
						each list to make the process of adding them to the
						database quicker.
						</p>

					</div>
				</div>
			</div>


			<!-- Panel #8 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>
						<a data-toggle="collapse" href="#box8">
							Where can I view the code for aexyabot?
						</a>
					</h4>
				</div>

				<div id="box8" class="panel-collapse collapse">
					<div class="panel-body">

						<h5>
							<a href="https://github.com/aeyxa/aeyxabot"
							target="_blank">
								You can find the code on GitHub!
							</a>
						</h5>

					</div>

				</div>
			</div>

		</div>

		<!-- Raises the floor up -->
		<div style="background-color:white;height:100px;"></div>

	</div>

	<!-- not used -->
	<div class="col-md-3"></div>

</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script src="/js/display.js"></script>
@endsection
