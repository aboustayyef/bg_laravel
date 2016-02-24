<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('description')">
	<title>@yield('title')</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/app.css?v=1.03">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>
<body>
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-15958815-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<header id="header">
		@include('partials.header')
	</header>
	<div class="page__shroud"></div>	

	@yield('content')
	
	<!-- Custom App -->
	<script src="/js/all.js?v=1.01"></script>

</body>
</html>