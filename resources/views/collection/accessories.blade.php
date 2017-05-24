@extends('layouts.collection')

@section('title')
	Our Accessories - (BG) Blue Gallery Ghana
@stop

@section('collection-title')
	Our Accessories
@stop

@section('collection-subtitle')
	Relax and focus with Italy's finest...
@stop

@section('collection-section')

	<div class="container">
		<div class="columns">
			<div class="column">
				<img src="/img/collection_ditre_high.jpg">
			</div>
			<div class="column">
				<div class="section__title">
					World Class Home Furniture
				</div>
				<p class="title">
					Modern, Stylish and exclusive. Blue Gallery only stocks the highest standards of sofas, armchairs, coffee tables, Beds and mattresses for the contemporary living room
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
					<div class="subtitle">
						A few words to talk about how awesome the sofas are
					</div>
				</div>
				<div class="column">
					<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/ditre_sofas/'))->list ; ?>
					<div class="card__collection">
						@foreach ($thumbset as $key => $thumb)
							@include('collection.card', ['aspect' => 'is-2by1'])
						@endforeach
					</div>
				</div>
			</div>

			<hr>

			<h2 class="section__title section__give_space has-text-right">Armchairs with Style and Grace</h2>
			<div class="columns">
				<div class="column">
					<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/ditre_armchairs/'))->list ; ?>
					<div class="card__collection">
						@foreach ($thumbset as $key => $thumb)
							@include('collection.card', ['aspect' => 'is-square'])
						@endforeach
					</div>	
				</div>
				<div class="column is-2">
					<div class="subtitle">
						A few words to describe the cool armchairs
					</div>
				</div>
			</div>

			<hr>

			<h2 class="section__title section__give_space">Our Beds</h2>

			<div class="columns">
				<div class="column is-2">
					<div class="subtitle">
						A few words to talk about how awesome the beds are
					</div>
				</div>
				<div class="column">
				<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/ditre_beds/'))->list ; ?>
				<div class="card__collection">
					@foreach ($thumbset as $key => $thumb)
						@include('collection.card', ['aspect' => 'is-2by1'])
					@endforeach
				</div>
			</div>
		</div>
	</div>
@stop

