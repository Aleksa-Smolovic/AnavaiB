@extends('front.includes.nav')

@section('content')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>{{Auth::user()->full_name}}’s profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="/home">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="{{Auth::user()->userDetails->image}}" alt=""><br></a>
						<button onclick="$('#image').trigger('click');" class="redbtn">Change avatar</button>
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
							<li  class="active"><a href="/profile">Profile</a></li>
							<li><a href="/favourite">Favorite movies</a></li>
							<li><a href="/rated">Rated movies</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							<li><a href="#">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>

@yield('profile-content')

</div>
</div>
</div>

@endsection