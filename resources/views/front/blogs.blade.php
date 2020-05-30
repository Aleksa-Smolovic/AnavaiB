@extends('front.includes.nav')

@section('content')

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> blog listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> blog listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog list section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">

				@if(count($blogs) != 0)

					@foreach($blogs as $blog)

					<div class="blog-item-style-1 blog-item-style-3">
						<img src="https://image.shutterstock.com/image-photo/bright-spring-view-cameo-island-260nw-1048185397.jpg" alt="">
						<div class="blog-it-infor">
						<h3><a href="blog/{{$blog->slug}}">{{$blog->title}}</a></h3>
						<span class="time">{{$blog->created_at}}</span>
						<p> {{ str_limit(strip_tags($blog->text), $limit = 150, $end = '...') }}</p>
						</div>
					</div>

					@endforeach

				@endif

            	<ul class="pagination">

					{{ $blogs->links() }}

            	</ul>
			</div>
			
		</div>
	</div>
</div>

@endsection