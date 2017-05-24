@extends('layouts.collection')

@section('title')
	Our Office Collection - (BG) Blue Gallery Ghana
@stop

@section('collection-title')
	Our Office Collection
@stop

@section('collection-subtitle')
	Relax and focus with Italy's finest...
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
			<div class="column is-2">
				{{-- Just an empty column --}}
			</div>
		</div>
		<hr>

			<h2 class="section__title section__give_space">Sofas for the comfort of your family and your guests</h2>

			<div class="columns">
				<div class="column is-2">
					<div class="subtitle is-4">
						A few words to talk about how awesome the sofas are
					</div>
				</div>
				<div class="column">
					<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/interstuhl-swivel/'))->list ; ?>
					<div class="card__collection">
						@foreach ($thumbset as $key => $thumb)
							@include('collection.card', ['aspect' => ''])
						@endforeach
					</div>
				</div>
			</div>

			<hr>

			<h2 class="section__title section__give_space has-text-right">Armchairs with Style and Grace</h2>
			<div class="columns">
				<div class="column">
					<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/interstuhl-visitors/'))->list ; ?>
					<div class="card__collection">
						@foreach ($thumbset as $key => $thumb)
							@include('collection.card', ['aspect' => ''])
						@endforeach
					</div>	
				</div>
				<div class="column is-2">
					<div class="subtitle is-4">
						A few words to describe the cool armchairs
					</div>
				</div>
			</div>

	</div>
@stop

