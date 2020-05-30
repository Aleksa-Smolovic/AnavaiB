@extends('front.includes.nav')

@section('content')
<div class="slider sliderv2">
	<div class="container">
		<div class="row">

	    	<div class="slider-single-item">

				@foreach($sliderMovies as $movie)

				<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
								<span class="blue">{{$movie->category->name}}</span>
			    				</div>
							<h1><a href="/movie/{{$movie->slug}}">{{$movie->title}}<br>
								 <span>{{$movie->release_date}}</span></a></h1>
								<div class="social-btn">
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
								<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: {{$movie->run_time}} </li>
									<li>  Release: {{$movie->release_date}}</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
								<div><a href="/movie/{{$movie->slug}}" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "/movie/{{$movie->slug}}" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>		
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="{{$movie->image}}" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>

				@endforeach

	    		
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>in theater</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1-h2">#Popular</a></li>
					<li><a href="#tab2-h2"> #Coming soon</a></li>
					<li><a href="#tab3-h2">  #Top rated  </a></li>
					<li><a href="#tab4-h2"> #Most reviewed</a></li>                        
				</ul>
			    <div class="tab-content">
			        <div id="tab1-h2" class="tab active">
			            <div class="row">

			            	<div class="slick-multiItem2">

								@foreach($popular as $movie)

								<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
										<img src="{{$movie->image}}" alt="">
				            			</div>
				            			<div class="hvr-inner">
										<a href="/movie/{{$movie->slug}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
										<h6><a href="/movie/{{$movie->slug}}">{{$movie->title}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
				            			</div>
				            		</div>
			            		</div>

								@endforeach

			            	</div>
			            </div>
			        </div>
			        <div id="tab2-h2" class="tab">
			           <div class="row">
			            	<div class="slick-multiItem2">
			            		@foreach($comingSoon as $movie)

								<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
										<img src="{{$movie->image}}" alt="">
				            			</div>
				            			<div class="hvr-inner">
										<a href="/movie/{{$movie->slug}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
										<h6><a href="/movie/{{$movie->slug}}">{{$movie->title}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
				            			</div>
				            		</div>
			            		</div>

								@endforeach
			            	</div>
			            </div>
			        </div>
			        <div id="tab3-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">

								@foreach($topRated as $movie)

								<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
										<img src="{{$movie->image}}" alt="">
				            			</div>
				            			<div class="hvr-inner">
										<a href="/movie/{{$movie->slug}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
										<h6><a href="/movie/{{$movie->slug}}">{{$movie->title}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
				            			</div>
				            		</div>
			            		</div>

								@endforeach

			            	</div>
			            </div>
		       	 	</div>
		       	 	 <div id="tab4-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
								
								@foreach($new as $movie)

								<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
										<img src="{{$movie->image}}" alt="">
				            			</div>
				            			<div class="hvr-inner">
										<a href="/movie/{{$movie->slug}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
										<h6><a href="/movie/{{$movie->slug}}">{{$movie->title}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /5</p>
				            			</div>
				            		</div>
			            		</div>

								@endforeach

			            	</div>
			            </div>
		       	 	</div>
			    </div>
			</div>
		
		</div>
	</div>
</div>

<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>Random Trailers</h2>
					<a href="/movies" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
					   <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
						</div>
					</div>
					<div class="slider-nav-2 thumb-ft">
						@foreach($trailerMovies as $trailerMovie)
						<div class="item">
							<div class="trailer-img">
								<img src="{{$trailerMovie->image}}"  alt="photo by Barn Images" width="4096" height="2737">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">{{$trailerMovie->title}}</h4>
	                        </div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Actors</h4>
						@foreach($actors as $actor)

						<div class="celeb-item">
							<a href="/actor/{{$actor->slug}}"><img src="{{$actor->image}}" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="/actor/{{$actor->slug}}">{{$actor->full_name}}</a></h6>
							</div>
						</div>

						@endforeach
						
						
					</div>
				</div>
			</div>
		</div>
	
</div>
<!-- latest new v2 section-->
<div class="latestnew full-width">
		<div class="row">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>Latest news</h2>
					<a href="/blogs" class="viewall">see all news <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="latestnewv2">
					@foreach($blogs as $blog)

					<div class="blog-item-style-2">
						<a href="blog/{{$blog->slug}}"><img src="{{$blog->image}}" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blog/{{$blog->slug}}">{{$blog->title}}</a></h3>
						<span class="time">{{$blog->created_at}}</span>
							<p>{{ str_limit(strip_tags($blog->text), $limit = 100, $end = '...') }}</p>
						</div>
					</div>

					@endforeach
					
				</div>
			</div>
			
		</div>
	
</div>

@endsection
