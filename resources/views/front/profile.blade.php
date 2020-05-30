@extends('front.includes.profile')

@section('profile-content')

			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
				<form action="{{route('user-details')}}" method="POST" class="user submitForm">
						@csrf

					<input type="hidden" value="{{Auth::user()->userDetails->id}}" name="id"/>
					<input id="image" type="file" style="visibility: hidden" name="image"/>
						<h4>01. Profile details</h4>
						<div class="row">
							<div class="col-md-12 form-it">
								<label>Email Address</label>
								<input type="text" name="email" value="{{Auth::user()->email}}" placeholder="edward@kennedy.com">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>First Name</label>
								<input type="text" name="first_name" value="{{Auth::user()->userDetails->first_name}}" placeholder="Edward ">
							</div>
							<div class="col-md-6 form-it">
								<label>Last Name</label>
								<input type="text" name="last_name" value="{{Auth::user()->userDetails->last_name}}" placeholder="Kennedy">
							</div>
						</div>
	
						<h4>02. Change password</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>New Password</label>
								<input type="text" name="password" placeholder="***************">
							</div>

							<div class="col-md-6 form-it">
								<label>Confirm New Password</label>
								<input type="text" name="password_confirmation" placeholder="*************** ">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 mt-4">
								<input type="submit" class="submit"/>
							</div>
						</div>	
					</form>
				</div>
			</div>
	

@endsection