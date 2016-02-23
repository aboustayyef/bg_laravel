@extends('layout')

@section('description')
Blue Gallery is Ghana’s top destination for premium home &amp; office furniture
@stop

@section('title')
Blue Gallery Home &amp; Office - Contemporary furniture in Ghana
@stop

@section('content')
<div id="fullpage">   
    <div id="home" class="section bgSection bgSection--notop">
    	@include('partials.slides')
	</div>
	<div id="features" class="section bgSection">
		@include('partials.features')
	</div>
	<div id="customers" class="section bgSection">
		@include('partials.customers')
	</div>    
    <div id="lb_collection" class="section bgSection">
    	@include('partials.collection')
    </div>
    
    <div id ="brands" class="section bgSection">
    	@include('partials.brands')
    </div>
    
    <div id="projects" class="section bgSection">
    	@include('partials.projects')
    </div>
    <div id="about" class="section bgSection">
        @include('partials.about')
    </div>
    <div id="contact" class="section bgSection">
    	@include('partials.contacts')
    </div>
</div>
<div class="modalpage" id="contact-modal">
		<div class="closewindow">
				<a href="#" class="light off-modal">&times;</a>
		</div>
		@include('partials.contacts')
</div>

@include('partials.livingModal')
@include('partials.officeModal')
@include('partials.accessoriesModal')

@include('partials.footer')

@stop