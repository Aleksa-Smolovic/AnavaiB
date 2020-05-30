<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- comingsoon14:54-->
<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/template/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('css/template/style.css') }}">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="/images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
		<form method="POST" action="{{ route('login') }}">
			@csrf
        	<div class="row">
        		 <label for="email">
                    Email:
                    <input type="email" value="{{ old('email') }}" name="email" id="email" placeholder="email@email.com" required="required" />
				</label>
			
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" required="required" />
				</label>
					
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me" {{ old('remember') ? 'checked' : '' }}><span>Remember me</span>
					</div>
				</div>
				
				@if($errors->any())
					{!! implode('', $errors->all('<div>:message</div>')) !!}
				@endif

            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
    </div>
</div>

<div class="page-single-2">
	<div class="container">
		<div class="row ipad-width">
			<div class="left-content">
				<a href="index-2.html"><img class="md-logo" src="images/logo1.png" alt=""></a>
				<h1>successful registration</h1>
				<p>You have successfully activated your account</p>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						
						<h3>Log in</h3>
						<button class="redbtn loginLink">Log in</button>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img class="cm-img" src="/images/uploads/cm-img.png" alt="">
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('js/template/jquery.js') }}"></script>
<script src="{{ asset('js/template/plugins.js') }}"></script>
<script src="{{ asset('js/template/plugins2.js') }}"></script>
<script src="{{ asset('js/template/custom.js') }}"></script>
<script src="{{ asset('admin_css_js/ajaxSubmitForm.js') }}"></script>
</body>

<!-- comingsoon14:55-->
</html>