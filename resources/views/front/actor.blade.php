@extends('front.includes.nav')

@section('content')
<div class="hero hero3">
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
<!-- celebrity single section-->

<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
				<img src="{{$actor->image}}" alt="">
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
				<h1 class="bd-hd">{{$actor->full_name}}</h1>
					<p class="ceb-single">Actor  |  Producer</p>
					<div class="social-link cebsingle-socail">
						<a href="#"><i class="ion-social-facebook"></i></a>
						<a href="#"><i class="ion-social-twitter"></i></a>
						<a href="#"><i class="ion-social-googleplus"></i></a>
						<a href="#"><i class="ion-social-linkedin"></i></a>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overviewceb">Overview</a></li>
								<li><a href="#biography"> biography</a></li>
								<li><a href="#mediaceb"> Media</a></li> 
								<li><a href="#filmography">filmography</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>
												{{$actor->overview}}
						            		</p>
											<p class="time"><a href="#">See full bio <i class="ion-ios-arrow-right"></i></a></p>
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
												<h4>filmography</h4>
												<a href="#" class="time">Full Filmography<i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">	
												
												@foreach($movies->take(8) as $movie)

													<div class="cast-it">
														<div class="cast-left cebleb-film">
															<img width="50px" height="50px" src="{{$movie->image}}" alt="">
															<div>
																<a href="/movie/{{$movie->slug}}">{{$movie->title}} </a>
																<p class="time">{{$movie->character}}</p>
															</div>
															
														</div>
														<p>...  {{$movie->release_date}}</p>
													</div>

												@endforeach

											</div>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Fullname:  </h6>
											<p><a href="#">{{$actor->full_name}}</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Date of Birth: </h6>
											<p>{{$actor->birth_date}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Country:  </h6>
						            			<p>{{$actor->country}}</p>
						            		</div>
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Biography of</h3>
						       	 				<h2>{{$actor->full_name}}</h2>
											</div>							            						
						            	</div>
						            	<p>
											{{$actor->biography}}
										</p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Biography of</h3>
					       	 					<h2>{{$actor->full_name}}</h2>
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
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Filmography of</h3>
					       	 					<h2>{{$actor->full_name}}</h2>
						            		</div>
										
						            	</div>
						            	<div class="topbar-filter">
											<p>Found <span>{{count($movies)}} movies</span> in total</p>				
										</div>
										<!-- movie cast -->
										<div class="mvcast-item">	
											
											@foreach($movies as $movie)

												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img width="50px" height="50px" src="{{$movie->image}}" alt="">
														<div>
															<a href="/movie/{{$movie->slug}}">{{$movie->title}} </a>
															<p class="time">{{$movie->character}}</p>
														</div>
														
													</div>
													<p>  {{$movie->release_date}}</p>
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
	</div>
</div>

@endsection