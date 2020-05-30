@extends('front.includes.nav')

@section('content')

<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="{{$movie->image}}" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="{{$movie->trailer}}" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="{{$movie->trailer}}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd">{{$movie->title}} <span>{{$movie->relase_date}}</span></h1>
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
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span>{{$movie->rating}}</span> /5<br>
								<span class="rv">{{count($movie->reviews)}} Reviews</span>
							</p>
						</div>
						<div class="rate-star">
							<p>Your rating:  </p>
							@if($userRating)
								@for($i = 0; $i<$userRating->rating; $i++)
									<i class="ion-ios-star"></i>
								@endfor
								@for($i = 0; $i < 5 - $userRating->rating; $i++)
									<i class="ion-android-star-outline"></i>
								@endfor
							@endif
						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#reviews"> Reviews</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>
								<li><a href="#media"> Media</a></li> 
								<li><a href="#moviesrelated"> Related Movies</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
										<p>{{$movie->text}}</p>
						            		<div class="title-hd-sm">
												<h4>Videos & Photos</h4>
												<a href="#" class="time">All 5 Videos & 245 Photos <i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="mvsingle-item ov-item">
												<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image11.jpg" ><img src="/images/uploads/image1.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image21.jpg" ><img src="/images/uploads/image2.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image31.jpg" ><img src="/images/uploads/image3.jpg" alt=""></a>
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/image4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
											</div>
											<div class="title-hd-sm">
												<h4>cast</h4>
												<a href="#cast" class="time">Full Cast & Crew  <i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">	

												@foreach($actors->take(5) as $actor)
													<div class="cast-it">
														<div class="cast-left">
															<img width="50px" height="50px" src="{{$actor->image}}" alt="">
														<a href="/actor/{{$actor->slug}}">{{$actor->full_name}}</a>
														</div>
													<p>... {{$actor->character}}</p>
													</div>
												@endforeach										
												
											</div>
											
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
						            			<p><a href="#">Joss Whedon</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Writer: </h6>
						            			<p><a href="#">Joss Whedon,</a> <a href="#">Stan Lee</a></p>
						            		</div>
						            		<div class="sb-it">
												<h6>Stars: </h6>
												<p>
													@foreach($actors->take(3) as $actor)
												<a href="/actor/{{$actor->slug}}">{{$actor->full_name}},</a> 
													@endforeach
						            			</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
											<p>{{$movie->category->name}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
											<p>{{$movie->release_date}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p>141 min</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>MMPA Rating:</h6>
						            			<p>PG-13</p>
						            		</div>
						            	
						            		
						            	</div>
						            </div>
						        </div>
						        <div id="reviews" class="tab review">
						           <div class="row">
						            	<div class="rv-hd">
						            		<div class="div">
							            	
							            	</div>
							            	<a href="javascript:void(0);" class="redbtn loginLink">Write Review</a>
						            	</div>
						            	<div class="topbar-filter">
											<p>Found <span>{{count($movie->reviews)}} reviews</span> in total</p>
											<label>Filter by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>

										@foreach($movie->reviews as $review)

											<div class="mv-user-review-item">
												<div class="user-infor">
													<img src="{{$review->user->userDetails->image}}" alt="">
													<div>
														<h3>{{$review->title}}</h3>
														<div class="no-star">
															@for($i = 0; $i < $review->rating; $i++)
																<i class="ion-android-star"></i>
															@endfor
															@for($i = 0; $i < 5 - $review->rating; $i++)
																<i class="ion-android-star-outline"></i>
															@endfor
														</div>
														<p class="time">
															{{$review->created_at}} by <a href="#"> {{$review->user->email}}</a>
														</p>
													</div>
												</div>
												<p>{{$review->text}}</p>
											</div>

										@endforeach

									
						            </div>
						        </div>
						        <div id="cast" class="tab">
						        	<div class="row">
						            	<h3>Cast & Crew of</h3>
					       	 			<h2>{{$movie->title}}</h2>
										<!-- //== -->
					       	 			<div class="title-hd-sm">
											<h4>Directors & Credit Writers</h4>
										</div>
										<div class="mvcast-item">											
											<div class="cast-it">
												<div class="cast-left">
													<h4>JW</h4>
													<a href="#">Joss Whedon</a>
												</div>
												<p>...  Director</p>
											</div>
										</div>
										<!-- //== -->
										
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Cast</h4>
										</div>
										<div class="mvcast-item">		
											
											@foreach($actors as $actor)
												<div class="cast-it">
													<div class="cast-left">
														<img width="50px" height="50px" src="{{$actor->image}}" alt="">
													<a href="/actor/{{$actor->slug}}"> {{$actor->full_name}}</a>
													</div>
												<p>... {{$actor->character}}</p>
												</div>
											@endforeach	
											
										</div>
										<!-- //== -->
										
						            </div>
					       	 	</div>
					       	 	<div id="media" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Videos & Photos of</h3>
					       	 					<h2>Skyfall: Quantum of Spectre</h2>
						            		</div>
						            	</div>
						            	<div class="title-hd-sm">
											<h4>Videos <span>(8)</span></h4>
										</div>
										<div class="mvsingle-item media-item">
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item1.jpg" alt="">
													<a class="fancybox-media hvr-grow"  href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Trailer:  Watch New Scenes</a></h6>
													<p class="time"> 1: 31</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item2.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Featurette: “Avengers Re-Assembled</a></h6>
													<p class="time"> 1: 03</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item3.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Robert Downey Jr</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Scarlett Johansson</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item1.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Featurette: Meet Quicksilver & The Scarlet Witch</a></h6>
													<p class="time"> 1: 31</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item2.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Director Joss Whedon</a></h6>
													<p class="time"> 1: 03</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item3.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Mark Ruffalo</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="/images/uploads/vd-item4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="/images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Official Trailer #2</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
										</div>
										<div class="title-hd-sm">
											<h4>Photos <span> (21)</span></h4>
										</div>
										<div class="mvsingle-item">
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image11.jpg" ><img src="/images/uploads/image1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery"  href="/images/uploads/image21.jpg" ><img src="/images/uploads/image2.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image31.jpg" ><img src="/images/uploads/image3.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image41.jpg" ><img src="/images/uploads/image4.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image51.jpg" ><img src="/images/uploads/image5.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image61.jpg" ><img src="/images/uploads/image6.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image71.jpg" ><img src="/images/uploads/image7.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image81.jpg" ><img src="/images/uploads/image8.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image91.jpg" ><img src="/images/uploads/image9.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image101.jpg" ><img src="/images/uploads/image10.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image111.jpg" ><img src="/images/uploads/image1-1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image121.jpg" ><img src="/images/uploads/image12.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image131.jpg" ><img src="/images/uploads/image13.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image141.jpg" ><img src="/images/uploads/image14.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image151.jpg" ><img src="/images/uploads/image15.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image161.jpg" ><img src="/images/uploads/image16.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image171.jpg" ><img src="/images/uploads/image17.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image181.jpg" ><img src="/images/uploads/image18.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image191.jpg" ><img src="/images/uploads/image19.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image201.jpg" ><img src="/images/uploads/image20.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="/images/uploads/image211.jpg" ><img src="/images/uploads/image2-1.jpg" alt=""></a>
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="moviesrelated" class="tab">
					       	 		<div class="row">
					       	 			<h3>Related Movies To</h3>
					       	 			<h2>{{$movie->title}}</h2>
					       	 			<div class="topbar-filter">
											<p>Found <span>{{count($relatedMovies)}} movies</span> in total</p>
										</div>

										@foreach($relatedMovies as $relatedMovie)

											<div class="movie-item-style-2">
												<img src="{{$relatedMovie->image}}" alt="">
												<div class="mv-item-infor">
													<h6><a href="#">{{$relatedMovie->title}} <span>({{$relatedMovie->release_date}})</span></a></h6>
												<p class="rate"><i class="ion-android-star"></i><span>{{$relatedMovie->rating}}</span> /5</p>
													<p class="describe">{{ str_limit(strip_tags($relatedMovie->overview), $limit = 150, $end = '...') }}</p>
												<p class="run-time"> Run Time: {{$relatedMovie->run_time}}’    .     <span>MMPA: PG-13 </span>    .     <span>Release: {{$relatedMovie->release_date}}</span></p>
													<p>Director: <a href="#">Joss Whedon</a></p>
													<p>Stars: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
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
	</div>
</div>


<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Write review</h3>
		<form method="POST" class="submitForm" action="{{ route('movie/rating', $movie->id) }}">
			@csrf
        	<div class="row">
        		 <label for="title">
                    Title:
                    <input type="text" name="title" id="title" placeholder="title" required="required" />
				</label>
			</div>
			
			<div class="row">
				<label for="rating">
				   Rating:
				   <input type="range" name="rating" id="rating" min="1" max="5" />
			   </label>
			</div>

            <div class="row">
            	<label for="text">
                    Text:
					<textarea name="Text" rows="5" id="text" placeholder="text"></textarea>
				</label>
            </div>
          
           <div class="row">
           	 <button type="submit">Submit</button>
           </div>
        </form>
    </div>
</div>
<!--end of login form popup-->

@endsection