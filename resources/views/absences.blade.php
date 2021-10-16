@extends('layouts.master')
@section('page-header')
			<!-- breadcrumb -->
			<div class="breadcrumb-header justify-content-between">
				<div class="my-auto">
					<div class="d-flex">
						<h4 class="content-title mb-0 my-auto">دفتر الغياب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ فارغ</span>
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
					<div class="dropdown">
						<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info-gradient"
						data-toggle="dropdown" id="dropdownMenuButton" type="button">Month <i class="fas fa-caret-down ml-1"></i></button>
						<div  class="dropdown-menu tx-13">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
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
				<livewire:absences />
			</div>
		</div>
		<!-- row closed -->
@endsection
