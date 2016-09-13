@extends('layouts.app')

<link rel="stylesheet" href="/css/aeyxaButtons.css">
<link rel="stylesheet" href="/css/pageStyle.css">

@section('content')
<div v-cloak id="container"><div class="container">
<div class="row"><div class="col-md-3"></div>


        <div class="col-md-6 center"><br><br><br>

		@if(count($errors) > 0)<p class="center">Try using the 'Random' button below!</p>@endif

		<form method="POST" action="/crawl/wikipedia">{{ csrf_field() }}

		<input name="url" class="form-control input-lg" v-model="wikiurl" value="@{{ wikiurl }}">

        <div class="row"><div class="col-md-12 center"><p></p>
        <button class="btn btn-default" style="width:30%;height:40px;">Search</button></form>

		<form method="POST" action="/crawl/random">{{ csrf_field() }}
		<button class="btn btn-default" style="width:30%;height:40px;">Random</button></form>


		<div style="height:50%"></div><a href=about/aeyxabot>Read about aeyxabot here.</a>

		</div></div></div>


<div class="col-md-3"></div></div></div></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script src="/js/sng.js"></script>
@endsection
