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
				<img src="/img/collection_kostaboda_high.png">
			</div>
			<div class="column">
				<div class="section__title">
					Delicate, Strong and Precious
				</div>
				<p class="title">
					Rugs, Bowls, vases, dishes,shelf objects &amp; candle holders that will make a great complement to any living area with their distinctive and exquisite style to add more life and spirit to your home.
				</p>
			</div>
			<div class="column is-2">
				{{-- Just an empty column --}}
			</div>
		</div>
		<hr>

			<div class="block">
				<div class="columns">
					<div class="column is-4">
						<h2 class="section__title">Colorful and Elegant Vases</h2>
				<div class="subtitle is-4">
					Nothing brightens a room like a vase with personality
				</div>
					</div>
					<div class="column is-8">
					<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/kosta_boda_vases/'))->list ; ?>
						<div class="card__collection">
							@foreach ($thumbset as $key => $thumb)
								@include('collection.card', ['aspect' => ''])
							@endforeach
						</div>
					</div>
				</div>
			</div>
			
			<hr>

				<div class="block">
					<h2 class="section__title section__give_space has-text-centered">... with some lovely bowls</h2>
				</div>
				<div class="block">
					<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/kosta_boda_bowls/'))->list ; ?>
					<div class="card__collection">
						@foreach ($thumbset as $key => $thumb)
							@include('collection.card', ['aspect' => ''])
						@endforeach
					</div>	
				</div>
			<hr>


			<div class="columns">
				<div class="column is-10">
				<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/kosta_boda_dishes/'))->list ; ?>
				<div class="card__collection">
					@foreach ($thumbset as $key => $thumb)
						@include('collection.card', ['aspect' => ''])
					@endforeach
				</div>
				</div>
				<div class="column is-2">
					<h2 class="section__title section__give_space">...and Dishes</h2>
				</div>
			</div>
		</div>
	</div>
@stop

