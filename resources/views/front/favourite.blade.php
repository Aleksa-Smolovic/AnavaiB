@extends('front.includes.profile')

@section('profile-content')
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="topbar-filter user">
					<p>Found <span>{{count(Auth::user()->ratings)}} movies</span> in total</p>
					<label>Movies per page:</label>
					<select onchange="window.location.href = $(this).val()">
						<option selected disabled>Choose</option>
						<option value="/favourite/15">15</option>
						<option value="/favourite/25">25</option>
					</select>
				</div>
				<div class="flex-wrap-movielist grid-fav">

					@foreach($userMovies as $movie)

						<div class="movie-item-style-2 movie-item-style-1 style-3">
							<img src="{{$movie->image}}" alt="">
							<div class="hvr-inner">
							<a  href="/movie/{{$movie->slug}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<h6><a href="/movie/{{$movie->slug}}">{{$movie->title}}</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
							</div>
						</div>	

					@endforeach

				</div>		

					<div class="pagination2">
						{{ $userMovies->links() }}
					</div>
			</div>
		</div>
	</div>
</div>

@endsection
