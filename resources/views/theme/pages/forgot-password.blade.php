@extends('layouts.empty')

@section('css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
<style>
	html,
	body {
		height: 100%;
	}
	body {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		padding-top: 40px;
		padding-bottom: 40px;
	}
</style>
@endsection

@section('content')
<!-- ============================================================== -->
<!-- forgot password  -->
<!-- ============================================================== -->
<div class="splash-container">
	<div class="card">
		<div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
		<div class="card-body">
			<form>
				<p>Don't worry, we'll send you an email to reset your password.</p>
				<div class="form-group">
					<input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
				</div>
				<div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Reset Password</a></div>
			</form>
		</div>
		<div class="card-footer text-center">
			<span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- end forgot password  -->
<!-- ============================================================== -->
</div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
@endsection