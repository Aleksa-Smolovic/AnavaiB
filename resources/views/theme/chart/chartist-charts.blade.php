@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}">
@endsection

@section('content')
<div class="container-fluid  dashboard-content">
	<!-- ============================================================== -->
	<!-- pageheader -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="page-header">
				<h2 class="pageheader-title">Chartist.js </h2>
				<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
				<div class="page-breadcrumb">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Charts</a></li>
							<li class="breadcrumb-item active" aria-current="page">Chartist.js</li>
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
		<!-- simple line chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Simple Line Chart</h5>
				<div class="card-body">
					<div class="ct-chart-line ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end simple line chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- holes in data chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Holes In Data</h5>
				<div class="card-body">
					<div class="ct-chart-holes ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end holes in data chart  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!-- whole numbers chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Whole Numbers</h5>
				<div class="card-body">
					<div class="ct-chart-wnumbers ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end whole numbers charts -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- line scatter chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Line Scatter Diagram With Responsive Settings</h5>
				<div class="card-body">
					<div class="ct-chart-scatter ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end line scatter chart  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!-- line chart with area  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Line Chart With Area</h5>
				<div class="card-body">
					<div class="ct-chart-area ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end line chart with area  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- bi polar chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Bi-polar Line Chart With Area Only</h5>
				<div class="card-body">
					<div class="ct-chart-polar ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end bi polar chart  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!--stacked bar chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Stacked Bar Chart</h5>
				<div class="card-body">
					<div class="ct-chart-scatter-bar ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--end stacked bar chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!--multi line chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Multi Line Labels</h5>
				<div class="card-body">
					<div class="ct-chart-multilines ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--end multi line chart  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!--multi line lables chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Multi-line Labels</h5>
				<div class="card-body">
					<div class="ct-chart-bipolar ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end multi line lables chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- peak circle using the draw  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Add Peak Circles Using The Draw Events</h5>
				<div class="card-body">
					<div class="ct-chart-events ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end peak circle using the draw  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!-- advanced smill chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Advanced Smil Animations</h5>
				<div class="card-body">
					<div class="ct-chart-animation ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end advanced smill chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- horizontal chart bar  -->
		<!-- ============================================================== -->
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Horizontal Chart Bar</h5>
				<div class="card-body">
					<div class="ct-chart-horizontal ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end horizontal chart bar  -->
		<!-- ============================================================== -->
	</div>
	<div class="row">
		<!-- ============================================================== -->
		<!-- simple pie chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Simple Pie Chart</h5>
				<div class="card-body">
					<div class="ct-chart-pie ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end simple pie chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- donut chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Donut Chart Using Fill Rather Than Stroke</h5>
				<div class="card-body">
					<div class="ct-chart-donut ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end donut chart  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- animations donut chart  -->
		<!-- ============================================================== -->
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Animating A Donut With Svg.animate</h5>
				<div class="card-body">
					<div class="ct-chart-animated ct-golden-section"></div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end animations donut chart  -->
		<!-- ============================================================== -->
	</div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/chartist-bundle/Chartistjs.js') }}"></script>
<script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
@endsection