@extends('front.includes.nav')

@section('content')

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="/home">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p>Found <span>{{count($movies)}} movies</span> in total</p>
				</div>

				@foreach($movies as $movie)
					<div class="movie-item-style-2">
					<img src="{{$movie->image}}" alt="">
						<div class="mv-item-infor">
						<h6><a href="movie/{{$movie->slug}}">{{$movie->title}} <span>({{$movie->release_date}})</span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
							<p class="describe">{{ str_limit(strip_tags($movie->text), $limit = 150, $end = '...') }}</p>
							<p class="run-time"> Run Time: {{$movie->run_time}}    .     <span>MMPA: PG-13 </span>    .     <span>Release: {{$movie->relase_date}}</span></p>
							<p>Director: <a href="#">Joss Whedon</a></p>
							<p>Stars: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
						</div>
					</div>
				@endforeach

				<ul class="pagination">

					{{ $movies->links() }}

            	</ul>
			</div>
			
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<form class="form-style-1" method="GET" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" id="title" name="title" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Genres & Subgenres</label>
									<div class="group-ip">
										<select
											id="category" class="ui fluid dropdown">
											<option value="">Enter to filter genres</option>
											@foreach($categories as $category)
												<option value="{{$category->name}}">{{$category->name}}</option>
											@endforeach
										</select>
									</div>
									
								</div>
								<div class="col-md-12 form-it">
									<label>Release Year</label>
									<div class="row">
										<div class="col-md-6">
											<select id="from">
												<option selected disabled>From</option>
												<option value="2020">2020</option>
												<option value="2010">2010</option>
												<option value="2000">2000</option>
												<option value="1990">1990</option>
												<option value="1980">1980</option>
												<option value="1970">1970</option>
											</select>
										</div>
										<div class="col-md-6">
											<select id="to">
												<option selected disabled>To</option>
												<option value="2020">2020</option>
												<option value="2010">2010</option>
												<option value="2000">2000</option>
												<option value="1990">1990</option>
												<option value="1980">1980</option>
												<option value="1970">1970</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" id="search" type="button" value="submit">
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

