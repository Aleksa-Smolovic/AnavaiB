@extends('front.includes.profile')

@section('profile-content')

			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p>Found <span>{{count(Auth::user()->ratings)}} rates</span> in total</p>
				</div>

				@if(count(Auth::user()->ratings) == 0)
					You have not rated any movie yet!
				@else

					@foreach(Auth::user()->ratings as $rating)

						@if($rating->text)
							<div class="movie-item-style-2 userrate">
							<img src="{{$rating->movie->image}}" alt="">
								<div class="mv-item-infor">
									<h6><a href="/movie/{{$rating->movie->slug}}">{{$rating->movie->title}} <span> ({{$rating->movie->release_date}})</span></a></h6>
									<p class="time sm-text">your rate:</p>
									<p style="margin-top: 10px" class="rate">
										@for($i = 0; $i < $rating->rating; $i++)
											<i class="ion-android-star"></i>
										@endfor
										@for($i = 0; $i < 5 - $rating->rating; $i++)
											<i class="ion-android-star-outline"></i>
										@endfor
										<span>{{$rating->rating}}</span> /5</p>
									<p class="time sm-text">your reviews:</p>
									<h6 style="margin-top: 10px;">{{$rating->title}}</h6>
									<p class="time sm">{{$rating->created_at}}</p>
									<p>“{{$rating->text}}”</p>		
								</div>
							</div>
						@endif

					@endforeach

				@endif

			</div>

@endsection