@extends('front.includes.nav')

@section('content')

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>All movies</h1>
					<ul class="breadcumb">
						<li class="active"><a href="/home">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movies</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="topbar-filter fw">
					<p>Found <span>{{$movieCount}} movies</span> in total</p>
					<label>Sort by:</label>
					<select onchange="window.location.href = $(this).val()">
						<option selected disabled>Choose</option>
						<option value="{{route('movies', ['sort' => 'rating', 'by' => 'DESC'])}}">Popularity Descending</option>
						<option value="{{route('movies', ['sort' => 'rating', 'by' => 'ASC'])}}">Popularity Ascending</option>
						<option value="{{route('movies', ['sort' => 'release_date', 'by' => 'DESC'])}}">Release date Descending</option>
						<option value="{{route('movies', ['sort' => 'release_date', 'by' => 'ASC'])}}">Release date Ascending</option>
					</select>
				</div>
				<div class="flex-wrap-movielist mv-grid-fw">

				@foreach($movies as $movie)

				<div class="movie-item-style-2 movie-item-style-1">
				<img src="{{$movie->image}}" alt="">
					<div class="hvr-inner">
					<a  href="movie/{{$movie->slug}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					</div>
					<div class="mv-item-infor">
						<h6><a href="#">{{$movie->title}}</a></h6>
					<p class="rate"><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
					</div>
				</div>	

				@endforeach

				</div>		
					
					<!-- 737 -->
					<div class="pagination2">
						{{ $movies->appends(request()->input())->links() }}
					</div>
			</div>
		</div>
	</div>
</div>

@endsection