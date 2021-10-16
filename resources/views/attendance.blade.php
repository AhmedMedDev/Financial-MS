@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between">
			<div class="my-auto">
				<div class="d-flex">
					<h4 class="content-title mb-0 my-auto">دفتر الحضور</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ فارغ</span>
				</div>
			</div>
			<div class="d-flex my-xl-auto right-content">
				<div class="pr-1 mb-3 mb-xl-0">
					<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
				</div>
				<div class="pr-1 mb-3 mb-xl-0">
					<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
				</div>
				<div class="pr-1 mb-3 mb-xl-0">
					<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
				</div>
				<div class="mb-3 mb-xl-0">
					<div class="btn-group dropdown">
						<button type="button" class="btn btn-primary">14 Aug 2019</button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
							<a class="dropdown-item" href="#">2015</a>
							<a class="dropdown-item" href="#">2016</a>
							<a class="dropdown-item" href="#">2017</a>
							<a class="dropdown-item" href="#">2018</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb -->
@endsection
@section('content')
		<!-- row -->
		<div class="row">
			<div class="col-xl-12">
				<livewire:attendance />
			</div>
		</div>
		<!-- row closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection