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
	<link rel="stylesheet" href="{{url('css/skincss.css')}}">
	<script src="{{url('js/jquery.js')}}"></script>
	<script src="{{url('js/bootstrap.js')}}"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-static" style="border:none;">

		<div class="col-md-1">
			<div class="logo">
				<a href=""><img src="{{url('images/402955_thumb.png')}}" alt="" class="img-responsive" width="100"></a>
			</div>
		</div>
	<div class="col-md-8" style="padding-top: 50px; padding-bottom: 20px;">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse js-navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-large">
					<a href="index.html" style="color:#FFFFFF;">Home</a>
				</li>
				<li class="dropdown dropdown-large">
					<a href="homes.html" style="color:#FFFFFF;">Host a Home</a>
				</li>
				<li class="dropdown dropdown-large">
					<a href="expriences.html" style="color: #FFFFFF;">Host and Exprience</a>
				</li>
				<li class="dropdown dropdown-large">
					<a href="#" style="color:#FFFFFF;">Help</a>
				</li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" style="color: #FFFFFF;">products &nbsp; <span class="caret"></span></a>

					<ul class="dropdown-menu">
						<li><a href="">Dates</a></li>
						<li><a href="">Guests</a></li>
						<li><a href="">Filters</a></li>
						<li><a href="">Time of day</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-md-3" style="padding:15px; padding-left: 40px;">
		<div class="container">
			<a href="{{ route('login') }}" class="login_icone">
          		<span class="glyphicon glyphicon-user">Login</span>
        	</a>
		</div>
	</div>
 </div>
</nav>
<!-- /.nav-collapse -->
<section class="content">
	@yield('index_body')
</section>

<!-- footer......... -->
<div class="footer">
		<div class="row">

			<div class="col-md-3">
						<ul class="footer_box" style="padding-left: 50px;">
							<h4>Airbnb</h4>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Policies</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Diversity&Belonging</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<ul class="footer_box">
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
						<ul class="footer_box">
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
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form action="" method="">
				    			<input type="text" value="" placeholder="search">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
						</ul>
					<p style="color:#08EDCF;">© 2019 Travel.com <a href="#" target="_blank">SUMON MITRA</a></p>
			</div>
		</div>
	</div>

</body>
</html>
