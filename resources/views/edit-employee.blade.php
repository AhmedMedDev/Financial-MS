@extends('layouts.master')
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ فارغ</span>
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
                        <div class="card  box-shadow-0 ">
							<div class="card-header">
								<h4 class="card-title mb-1">Vertical Form</h4>
								<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
							</div>
							<div class="card-body pt-0">
								<form action="{{ url("employees/$employee->id")}}" method="POST">
									@method('PUT')
									@csrf
									<div class="">
										{{-- Name --}}
										<div class="form-group">
											<label>Employee's Name</label>
											<input type="text" class="form-control @error('name') is-invalid @enderror " value="{{ $employee->name }}" name="name" >
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Postion --}}
										<div class="form-group">
											<label>Employee's Position</label>
											<input type="text" class="form-control @error('position') is-invalid @enderror " value="{{ $employee->position }}" name="position" >
											@error('position')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Phone --}}
										<div class="form-group">
											<label>Employee's Phone</label>
											<input type="text" class="form-control @error('phone') is-invalid @enderror " value="{{ $employee->phone }}" name="phone" >
											@error('phone')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										
										{{-- Salary --}}
										<div class="form-group">
											<label>Employee's Salary</label>
											<input type="number" class="form-control @error('salary') is-invalid @enderror " value="{{ $employee->salary }}" name="salary" >
											@error('salary')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Email --}}
										<div class="form-group">
											<label>Employee's Email</label>
											<input type="email" class="form-control @error('email') is-invalid @enderror " value="{{ $employee->email }}" name="email" >
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- sart_date--}}
                                        <div class="form-group">
											<label>Employee's sart date</label>
                                            <div class="row row-sm">
                                                <div class="input-group col-md-12">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
														</div>
													</div><input class="form-control fc-datepicker @error('start_date') is-invalid @enderror " value="{{ $employee->start_date }}" type="text" name="start_date">
												</div>
                                            </div>
											@error('start_date')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Avatar --}}
										{{-- <div class="col-sm-12 col-md-8">
											<input type="file" class="dropify" data-height="200" name="avatar"/>
											@error('avatar')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div> --}}
									</div>
									<button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
								</form>
							</div>
						</div>
                    </div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
