@extends('layouts.master')
@section('page-header')
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between">
			<div class="my-auto">
				<div class="d-flex">
					<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
				</div>
			</div>
			<div class="d-flex my-xl-auto right-content">
				<div class="pr-1 mb-3 mb-xl-0">
					<a class="modal-effect btn btn-success-gradient btn-with-icon btn-block" data-effect="effect-scale" data-toggle="modal" href="#create"><i class="typcn typcn-edit"></i> Create</a>
				</div>
				<div class="pr-1 mb-3 mb-xl-0">
					<button class="btn btn-danger-gradient btn-with-icon btn-block"><i class="las la-trash"></i> Delete All</button>
				</div>
			</div>
		</div>
		<!-- breadcrumb -->
@endsection
@section('content')
		<!-- row -->
		<div class="row">
			<div class="col-xl-12">
				<livewire:childrens />
			</div>
		</div>
		<!-- row closed -->
@endsection