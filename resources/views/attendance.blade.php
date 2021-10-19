@extends('layouts.master')
@section('page-header')
		<div class="my-auto">
			<div class="d-flex">
				<h4 class="content-title mb-0 my-auto">دفتر الحضور</h4>
				<span class="text-muted mt-1 tx-13 mr-2 mb-0">/ فارغ</span>
			</div>
		</div>
		@include('layouts.page-header2')
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
