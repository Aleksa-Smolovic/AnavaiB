@extends('front.includes.nav')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> blog detail</h1>
					<ul class="breadcumb">
						<li class="active"><a href="/home">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> blog listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog detail section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="blog-detail-ct">
				<h1>{{$blog->title}}</h1>
					<span class="time">{{$blog->created_at}}</span>
					<img src="images/uploads/blog-detail.jpg" alt="">
					<p>
						{!!$blog->text!!}
					</p>
					<div class="flex-it share-tag">
						<div class="social-link">
							<h4>Share it</h4>
							<a href="#"><i class="ion-social-facebook"></i></a>
							<a href="#"><i class="ion-social-twitter"></i></a>
							<a href="#"><i class="ion-social-googleplus"></i></a>
							<a href="#"><i class="ion-social-pinterest"></i></a>
							<a href="#"><i class="ion-social-linkedin"></i></a>
						</div>

					</div>
					<!-- comment items -->
					<div class="comments">
						<h4>{{count($blog->comments)}} Comments</h4>

						@foreach($blog->comments as $comment)

						<div class="cmt-item flex-it">
							<div class="author-infor">
								<div class="flex-it2">
								<h6><a href="#">Steve Perry</a></h6> <span class="time"> - {{$comment->created_at}}</span>
								</div>
							<p>{{$comment->text}}</p>
							</div>
						</div>

						@endforeach

					</div>
					<div class="comment-form">
						<h4>Leave a comment</h4>
						<form class="submitForm" action="{{ route('blog/comments') }}" method="POST">
							@csrf
							<div class="row">
								<div class="col-md-12">
								<input type="hidden" value="{{$blog->id}}" name="blog_id"/>
									<textarea name="text" id="text" placeholder="your comment"></textarea>
								</div>
							</div>
							<input class="submit" type="submit" placeholder="submit">
						</form>
					</div>
					<!-- comment form -->
				</div>
			</div>

		</div>
	</div>
</div>

@endsection