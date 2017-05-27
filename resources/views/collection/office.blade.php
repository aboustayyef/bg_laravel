@extends('layouts.collection')

@section('title')
	Our Office Collection - (BG) Blue Gallery Ghana
@stop

@section('collection-title')
	Our Office Collection
@stop

@section('collection-subtitle')
	We Mean Business
@stop

@section('collection-section')

	<div class="container">
		<div class="columns">
			<div class="column">
				<img src="/img/collection_interstuhl_high.jpg">
			</div>
			<div class="column">
				<div class="section__title">
					Office Furniture that works with you
				</div>
				<p class="title">
					High quality office chairs for maximum seating performance, characterised by exceptional design and state-of-the-art German Technology combined with Italian office furniture that is functional and elegant for a customised and efficient workplace.
				</p>
			</div>
			<div class="column is-1">
				{{-- Just an empty column --}}
			</div>
		</div>
		<hr>

			<div class="block">
				<h2 class="has-text-centered section__title">Ergonomic and Precise Swivel Chairs</h2>
				<div class="has-text-centered subtitle is-4">German engineering at the service of your comfort and productivity</div>
			</div>
			<div class="block">
				<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/interstuhl-swivel/'))->list ; ?>
				<div class="card__collection">
					@foreach ($thumbset as $key => $thumb)
						@include('collection.card', ['aspect' => ''])
					@endforeach
				</div>
			</div>

			<hr>

			<div class="block">
				<h2 class="has-text-centered section__title">Pleasure to do Business with You</h2>
				<div class="has-text-centered subtitle is-4">Our Visitor Chairs make your Guests feel Welcome</div>
			</div>
			<div class="block">
				<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/interstuhl-visitors/'))->list ; ?>
				<div class="card__collection">
					@foreach ($thumbset as $key => $thumb)
						@include('collection.card', ['aspect' => ''])
					@endforeach
				</div>
			</div>

	</div>
@stop

