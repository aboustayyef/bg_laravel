@extends('layouts.main')

@section('title')
Blue Gallery Home &amp; Office - Collection
@stop
@section('content')
    <div class="pageWrapper">
	    @include('layouts.partials.navigation')
		@include('homepage.slogan')
		@include('homepage.slideshow')
		@include('homepage.why')
		@include('homepage.ourcustomers')
		@include('homepage.ourcollection')
		@include('homepage.ourbrands')
		@include('homepage.projects')
		@include('homepage.about')
	    <script type="text/javascript" src="/js/app.js?v=1.01"></script>
    </div>
@stop