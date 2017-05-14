@extends('layouts.main')

@section('title')
Blue Gallery Home &amp; Office - Collection
@stop

@section('content')
	<style type="text/css">
		.header-image {
			   background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)),url(http://bluegallery.dev/img/slides/laptops-and-couch.jpg);
			   background-image: -o-linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)),url(http://bluegallery.dev/img/slides/laptops-and-couch.jpg);
			   background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)),url(http://bluegallery.dev/img/slides/laptops-and-couch.jpg);
			}
	</style>
<section class="hero is-medium is-primary header-image">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
			Primary bold title
			</h1>
			<h2 class="subtitle">
			Primary bold subtitle
			</h2>
		</div>
	</div>
	<div class="hero-foot">
		<div class="container">
      <nav class="tabs is-boxed">
        <ul>
          <li class="is-active">
            <a href="/documentation/overview/start/">Home Furniture</a>
          </li>
          <li>
            <a href="http://bulma.io/documentation/modifiers/syntax">Office</a>
          </li>
          <li>
            <a href="http://bulma.io/documentation/grid/columns">Accessories</a>
          </li>
        </ul>
      </nav></div>
	</div>
</section>
<section class="section">
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

			<h2 class="section__title title">Sofas for the comfort of your family and your guests</h2>

			<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/ditre_sofas/'))->list ; ?>
			<div class="card__collection">
				@foreach ($thumbset as $key => $thumb)
					@include('collection.card', ['aspect' => 'is-2by1'])
				@endforeach
			</div>

			<h2 class="section__title title">Armchairs with Style and Grace</h2>

			<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/ditre_armchairs/'))->list ; ?>
			<div class="card__collection">
				@foreach ($thumbset as $key => $thumb)
					@include('collection.card', ['aspect' => 'is-square'])
				@endforeach
			</div>

			<h2 class="section__title title">Beds</h2>

			<?php $thumbset = (new App\ThumbSet('/img/furnitureThumbs/ditre_beds/'))->list ; ?>
			<div class="card__collection">
				@foreach ($thumbset as $key => $thumb)
					@include('collection.card', ['aspect' => 'is-2by1'])
				@endforeach
			</div>

	</div>
</section>
@stop