@extends('layouts.main')

@section('title')
Blue Gallery Home &amp; Office - Collection
@stop

@section('content')
	@include('homepage.slogan')
	@include('homepage.slideshow')
	@include('homepage.why')
	@include('homepage.ourcustomers')
	<div id="brands">
		<h1>BRANDS</h1>
	</div>
@stop