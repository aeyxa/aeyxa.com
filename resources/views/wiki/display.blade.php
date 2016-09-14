@extends('layouts.app')

<link rel="stylesheet" href="/css/cardStyle.css">
<link rel="stylesheet" href="/css/pageStyle.css">


@section('content')
<div v-cloak id="container" class="center">

	<div class="col-md-6 col-md-offset-3">

		@if(count($trash) == $count)
			<div style="margin-top:100px;margin-bottom:100px;"><h3>Oops!</h3></div>
		@endif


	@if(count($cards) > 0)

		@foreach ($cards as $card)
			<div class="row" style="margin-bottom:50px;margin-top:30px;">
				<p><strong>{{ $card->Set }}</strong></p>

				{{-- For desktops, no transition effect --}}
				<div class="visible-lg visible-md">
					<button type="button" class="card" @click="Flip">
						<span v-if="flip">{{ $card->Front }}</span>
						<span v-if="!flip">{{ $card->Back }}</span>
					</button>
				</div>

				{{-- For mobile, slow transition effect --}}
				<div class="visible-sm visible-xs">
					<button type="button" class="card effect" @click="Flip">
						<span v-if="flip">{{ $card->Front }}</span>
						<span v-if="!flip">{{ $card->Back }}</span>
					</button>
				</div>

			</div>
		@endforeach

		<div id="paginator">{{ $cards->links() }}</div>

	@endif

	<button id="options" class="btn btn-default" data-toggle="modal" data-target="#myModal">
		Click here for more options.
	</button>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" data-dismiss="modal">
						<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
					</h4>
				</div>
				<div class="modal-body">
					@if(count($cards) > 0)
					<div v-if="update">
						<a href="/about/aeyxa">
							Help make aeyxabot smarter!
						</a>

						<br><br>

						<form method="POST" action="/update/{{ $card->id }}">
						{{ csrf_field() }} {{ method_field('PATCH') }}

						<textarea name="Front" class="form-control lg">{{ $card->Front }}
						</textarea>

						<br>

						<div class="well">{{ $card->Back }}</div>

						<button type="submit" class="btn btn-primary"
						style="width:140px">Submit</button>

						</form>
					</div>
					@endif

					<div v-if="destroy">
						<p>
							<h3>Warning!</h3>
							<span style="font-style:italic;">
								Delete means to
								<strong>permanently destroy</strong>.
							</span>
						</p><br>
						<a href="/delete/{{ $card->id }}">
							<button type="submit" class="btn btn-danger"
							style="width:140px">Delete</button>
						</a>
						<br><br>
					</div>

					<div v-if="stats">
						<div class="well" style="background-color:orange;color:white;padding:6px;">
							<span id="Trash-Bin" style="font-style:italic;font-size:14px;">
								<i class="fa fa-info-circle pull-left" aria-hidden="true"></i>
								<span style="font-weight:bold;font-size:16px;">
									aeyxabot
								</span>
								was unable to comprehend:<br>
								<span style="font-weight:bold;font-size:16px;">
									{{ count($trash) }}
								</span>
								sentence(s) of out
								<span style="font-weight:bold;font-size:16px;">
									{{ $count }}.
								</span>
							</span>
						</div>

						@foreach($trash as $each)
						<div id="aeyxa-hr"></div>

						<form method="POST" action="/trash/{{ $each->id }}">{{ csrf_field() }} {{ method_field('PATCH') }}
							<textarea name="Front" class="form-control">?</textarea>
							<div class="well">
								{{ $each->Sentence }}
							</div>
							<button type="reset" class="btn btn-default pull-left">
								Reset
							</button>
							<button type="submit" class="btn btn-primary pull-right">
								Submit
							</button><br>
						</form>

						@endforeach
					</div>

					<div v-if="help">
						<p>Coming soon...<br>
							<span style="font-style:italic;font-size:9px;color:#A4A4A4">
								(maybe)
							</span>
						</p>
						<br><br>
						<a href="/about/aeyxabot" target="_blank">
							Read our about page for available information!
						</a>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default"
					@click="Update" style="font-size:20px;">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-default"
					@click="Destroy" style="font-size:20px;">
						<i class="fa fa-trash" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-default"
					@click="Stats" style="font-size:20px;">
						<i class="fa fa-file-text" aria-hidden="true" focus></i>
					</button>
					<button type="button" class="btn btn-default"
					@click="Help" style="font-size:20px;">
						<i class="fa fa-question-circle" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-default"
					data-dismiss="modal" @click="Off">
						<span style="font-weight:bold;color:black;">
							&times;
						</span>
					</button>
				</div>

			</div>
		</div>
	</div>




</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script src="/js/display.js"></script>
@endsection
