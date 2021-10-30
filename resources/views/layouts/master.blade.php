<!DOCTYPE html>
<html lang="en">
	<head>
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