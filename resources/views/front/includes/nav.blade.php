<!DOCTYPE html>

<html lang="en" class="no-js">

<!-- homev206:52-->
<head>
	<!-- Basic need -->
	<title>Anavai</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/template/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('css/template/style.css') }}">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->

<!-- BEGIN | Header -->
<header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" href="/home">
							home 
							</a>
						</li>	
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							movies
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="/movies">Browse</a></li>
								<li><a href="/search">Search</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" href="/actors">
							actors 
							</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" href="/blogs" data-hover="dropdown">
							blogs 
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li><a href="/profile">profile</a></li>
						<li class="btn"><a href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">log out</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form></li>
					
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    <!-- search form -->
		</div>
	
</header>
<!-- END | Header -->

@yield('content')

<!--end of latest new v2 section-->
<!-- footer v2 section-->
<footer class="ht-footer full-width-ft">
	<div class="row">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
		<div class="ft-copyright">
			<div class="backtotop">
				<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer v2 section-->

<script src="{{ asset('js/template/jquery.js') }}"></script>
<script src="{{ asset('js/template/plugins.js') }}"></script>
<script src="{{ asset('js/template/plugins2.js') }}"></script>
<script src="{{ asset('js/template/custom.js') }}"></script>
<script src="{{ asset('admin_css_js/ajaxSubmitForm.js') }}"></script>

<script>

	$('#search').click(function (){
		var query = "{{route('search', ':query')}}";
		var params = '?';
		if($('#title').val().length != 0)
			params += "title=" + $('#title').val() + "&";
		if($('#category').val().length != 0)
			params += "category=" + $('#category').val() + "&";
		if(typeof $('#from').val() === undefined)
			params += "from=" + $('#from').val() + "&";
		if(typeof $('#to').val() === undefined)
			params += "to=" + $('#to').val() + "&";
		window.location.href = '/search/' + params;
	});
	
</script>

</body>

<!-- homev207:28-->
</html>