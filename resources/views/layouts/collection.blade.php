@extends('layouts.main')

@section('content')
<div class="pageWrapper" style="margin-top:-99px">
<link rel="stylesheet" type="text/css" href="/css/collection.css">

<section class="hero  is-primary is-medium 
		@if($request->path() == 'collection/home') header-image-home @endif
		@if($request->path() == 'collection/office') header-image-office @endif
		@if($request->path() == 'collection/accessories') header-image-accessories @endif
	">
	<div class="hero-head">
      <header class="nav">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="/">
              <img src="/img/bg_logo_inverse.svg" width="260px"  alt="Logo">
            </a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu">
            <a class="nav-item is-active" href="/">
              Home Page
            </a>
            <span class="nav-item">
              <a class="button is-info is-outlined is-inverted" href="/contact">
                <span class="icon">
                  <i class="fa fa-mobile"></i>
                </span>
                <span>Contact Us</span>
              </a>
            </span>
          </div>
        </div>
      </header>
    </div>
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				@yield('collection-title')
			</h1>
			<h2 class="subtitle">
				@yield('collection-subtitle')
			</h2>
		</div>
	</div>
	<div class="hero-foot">
		<div class="container">
      <nav class="tabs is-boxed">
        <ul>
          <li @if($request->path() == 'collection/home') class="is-active" @endif>
            <a href="/collection/home">Home Furniture</a>
          </li>
          <li @if($request->path() == 'collection/office') class="is-active" @endif>
            <a href="/collection/office">Office</a>
          </li>
          <li @if($request->path() == 'collection/accessories') class="is-active" @endif>
            <a href="/collection/accessories">Accessories</a>
          </li>
        </ul>
      </nav></div>
	</div>
</section>
<section class="section">
	@yield('collection-section')
</section>
</div> <!-- /pagewrapper -->
@stop