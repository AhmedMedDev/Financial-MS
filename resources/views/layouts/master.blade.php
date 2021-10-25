<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Financial Mangment System ">
		<meta name="Author" content="Ahmed Med">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		@include('layouts.head')
		@livewireStyles
		
	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('layouts.main-sidebar')		
		<!-- main-content -->
		<div class="main-content app-content">
			@include('layouts.main-header')			
			<!-- container -->
			<div class="container-fluid">
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					@yield('page-header')
				</div>
				<!-- breadcrumb -->
				
				@yield('content')
				@include('layouts.sidebar')
            	@include('layouts.footer')
			</div>
		</div>
		@livewireScripts	
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>	
		@include('layouts.footer-scripts')	
		@include('include.alerts.alerts')
	</body>
</html>