<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		@yield('css')

		<!-- css start -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/css/buttons.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/css/select.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/datepicker/tempusdominus-bootstrap-4.css') }}">
		<!-- css end -->

		<link rel="shortcut icon" href="{{ asset('img/favicon-32x32.png') }}" />

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<title>@yield('title', 'CMS')</title>
	</head>

	<body>
		<div class="dashboard-main-wrapper">
			<div class="dashboard-header">
				<nav class="navbar navbar-expand-lg bg-white fixed-top">
					<a class="navbar-brand" href="/">Home</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
				</nav>
			</div>

			<div class="nav-left-sidebar sidebar-dark">
				<div class="menu-list">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="d-xl-none d-lg-none" href="#">Dashboard</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav flex-column">
								<li class="nav-divider">
									Admin
								</li>
								<ul class="nav flex-column">

            						
        	<li class="nav-item">
                <a class="nav-link" href="{{ route('admin/blogs') }}">
                    <i class="fab fa-fw fa-wpforms"></i>Blog
                </a>
            </li>
            
        	<li class="nav-item">
                <a class="nav-link" href="{{ route('admin/categories') }}">
                    <i class="fab fa-fw fa-wpforms"></i>Categories
                </a>
            </li>
            
        	<li class="nav-item">
                <a class="nav-link" href="{{ route('admin/movies') }}">
                    <i class="fab fa-fw fa-wpforms"></i>Movies
                </a>
            </li>
            
        	<li class="nav-item">
                <a class="nav-link" href="{{ route('admin/actors') }}">
                    <i class="fab fa-fw fa-wpforms"></i>Actors
                </a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ route('users') }}">
					<i class="fa fa-fw fa-user-circle"></i>Users
				</a>
			</li>
		</ul>

		    <!-- MARKER -->							


			<li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
                    <i class="fab fa-fw fa-wpforms"></i>Log out
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
						
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="dashboard-wrapper">

				@yield('content')

				<div class="footer" style="position:fixed; bottom:0; width:100%; z-index: 1">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="text-md-right footer-links d-none d-sm-block">
									<a href="javascript: void(0);">About</a>
									<a href="javascript: void(0);">Support</a>
									<a href="javascript: void(0);">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- js start -->
		<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
		<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
		<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
		<script src="{{ asset('assets/libs/js/main-js.js') }}"></script>

		<script src="{{ asset('admin_css_js/ajaxSubmitForm.js') }}"></script>
		<script src="{{ asset('admin_css_js/delete.js') }}"></script>
		<script src="{{ asset('admin_css_js/ajaxFetch.js') }}"></script>

		<script src="{{ asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{ asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/datatables/js/data-table.js') }}"></script>
		<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
		<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js') }}"></script>
		<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js') }}"></script>
		<script src="{{ asset('https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/datepicker/moment.js') }}"></script>
		<script src="{{ asset('assets/vendor/datepicker/tempusdominus-bootstrap-4.js') }}"></script>
		<script src="{{ asset('assets/vendor/datepicker/datepicker.js') }}"></script>
		<!-- js end -->

		@yield('js')

	</body>
</html>
