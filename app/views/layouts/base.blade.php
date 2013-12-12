<!doctype html>
<html lang="en">
<head>	
	@include('layouts.header')
	@yield('javascript')
	<title>LaravelJqGrid</title>
</head>
<body id='body'>
	<a href="#page-container" class="sr-only">Skip to content</a>
	@include('layouts.top-bar')	
	<div id='page-container' class="container" role="main">	  	
	  <div class="row">
	    <div class="col-lg-12">	
	    	@yield('container')	    
	    </div>
	  </div>	  
	</div>
</body>
</html>