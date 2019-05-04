<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="{{url('engine1/style.css')}}" />
<script type="text/javascript" src="{{url('engine1/jquery.js')}}"></script>
<!-- End WOWSlider.com HEAD section -->
	<title>Air Bdbnb</title>
	<link rel="shortcut icon" href="{{url('images/ce-travel.jpg')}}">

	<link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" href="{{url('css/skincss.css')}}">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href=""><img src="{{url('images/402955_thumb.png')}}" alt="" class="img-responsive" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item">
  		<a class="nav-link" href="{{url('/')}}">Home</a>
  	  </li>

  	  <li class="nav-item">
  		<a class="nav-link" href="#">Host and Exprience</a>
  	  </li>

  	  <li class="nav-item">
  		<a class="nav-link" href="{{url('/')}}">Help</a>
  	  </li>

  	  <li class="nav-item">
  		<a class="nav-link" href="{{url('/showFlat')}}">All flat</a>
  	  </li>

  	  <li class="nav-item">
  		<a class="nav-link" href="{{url('/user/addFlat')}}">Add Flat</a>
  	  </li>
    </ul>
	@guest

	<ul class="navbar-nav ">
		<li class="nav-item">
			<a class="nav-link" href="{{ route('login') }}"><i class="far fa-user"></i> Login</a>
		</li>
	</ul>
	@else
	<ul class="navbar-nav ">
		<li class="nav-item">
			<a href="{{ route('logout') }}"
				onclick="event.preventDefault();
						 document.getElementById('logout-form').submit();">
				{{Auth::user()->name}}Logout
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
	</ul>
	@endguest
  </div>
</nav>





<!-- /.nav-collapse -->
<section class="content">
	@yield('index_body')
</section>

<!-- footer......... -->
<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<ul>
					<h4>Airbnb</h4>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Policies</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Diversity&Belonging</a></li>
				</ul>
			</div>

			<div class="col-md-3">
				<ul>
					<h4>Discover</h4>
					<li><a href="#">Trust & Safety</a></li>
					<li><a href="#">Gift Cards</a></li>
					<li><a href="#">Airbnb Citizen</a></li>
					<li><a href="#">Business Travel</a></li>
					<li><a href="#">Gidebooks</a></li>
					<li><a href="#">Airbnbmag</a></li>
					<li><a href="#">Events</a></li>
				</ul>
			</div>

			<div class="col-md-3">
				<ul>
					<h4>Hosting</h4>
					<li><a href="#">Why Host</a></li>
					<li><a href="#">Hospititality</a></li>
					<li><a href="#">Responsible</a></li>
					<li><a href="#">Hosting</a></li>
					<li><a href="#">Community</a></li>
					<li><a href="#">Center</a></li>
					<li><a href="#">Open Homes</a></li>
				</ul>
			</div>

			<div class="col-md-3">
				<ul>
				<h4>Newsletter</h4>
				<div class="newsletter">
					<form class="form-inline" action="#" method="post">
						<div class="form-group mb-2">
							<input type="email" class="form-control" placeholder="Email address">
						</div>
						<input type="submit" class="btn btn-primary btn-sm mb-2" name="submit" value="Submit">
					</form>
				</div>
				</ul>
			</div>
		</div>
		<div class="row text-center">
			<p>&copy; All rights reserved | 2019</p>
		</div>
	</div>
</div>

	<script src="{{url('js/jquery.js')}}"></script>
	<script src="{{url('js/proper.js')}}"></script>
	<script src="{{url('js/bootstrap.js')}}"></script>
</body>
</html>
