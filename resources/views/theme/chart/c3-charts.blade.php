@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
@endsection

@section('content')
<div class="container-fluid  dashboard-content">
	<!-- ============================================================== -->
	<!-- pageheader -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="page-header">
				<h2 class="pageheader-title">C3 Charts </h2>
				<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
				<div class="page-breadcrumb">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Charts</a></li>
							<li class="breadcrumb-item active" aria-current="page">C3 Charts</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- end pageheader -->
	<!-- ============================================================== -->
	<div class="row">
		<!-- ============================================================== -->
		<!--  area chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Area Chart</h5>
				<div class="card-body">
					<div id="c3chart_area"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--  end area chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!--  spline chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Spline Chart</h5>
				<div class="card-body">
					<div id="c3chart_spline"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- end  spline chart  -->
	<!-- ============================================================== -->
	<div class="row">
		<!-- ============================================================== -->
		<!--  zoom chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Zoom Chart</h5>
				<div class="card-body">
					<div id="c3chart_zoom"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--  end zoom chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!--  scatter chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Scatter Plot</h5>
				<div class="card-body">
					<div id="c3chart_scatter"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!--  end scatter chart  -->
	<!-- ============================================================== -->
	<div class="row">
		<!-- ============================================================== -->
		<!--  stacked chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Stacked Bar </h5>
				<div class="card-body">
					<div id="c3chart_stacked"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--  end stacked chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!--  combination chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Combination Chart </h5>
				<div class="card-body">
					<div id="c3chart_combine"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--  end combination chart  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!-- pie chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Pie Chart </h5>
				<div class="card-body">
					<div id="c3chart_pie"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end pie chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- dount chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Donut Chart </h5>
				<div class="card-body">
					<div id="c3chart_donut"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end dount chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- dount gauge  -->
		<!-- ============================================================== -->
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Donut Guage </h5>
				<div class="card-body">
					<div id="c3chart_gauge"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end dount gauge  -->
		<!-- ============================================================== -->
	</div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
<script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
@endsection