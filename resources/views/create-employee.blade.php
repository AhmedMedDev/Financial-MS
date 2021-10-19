@extends('layouts.master')
@section('page-header')
		<div class="my-auto">
			<div class="d-flex">
				<h4 class="content-title mb-0 my-auto">دفتر الغياب</h4>
				<span class="text-muted mt-1 tx-13 mr-2 mb-0">/ فارغ</span>
			</div>
		</div>
		@include('layouts.page-header2')
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
								<form action="{{ url('employees')}}" method="POST">
									@csrf
									<div class="">
										{{-- Name --}}
										<div class="form-group">
											<label>Employee's Name</label>
											<input type="text" class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}" name="name" >
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Postion --}}
										<div class="form-group">
											<label>Employee's Position</label>
											<input type="text" class="form-control @error('position') is-invalid @enderror " value="{{ old('position') }}" name="position" >
											@error('position')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Phone --}}
										<div class="form-group">
											<label>Employee's Phone</label>
											<input type="text" class="form-control @error('phone') is-invalid @enderror " value="{{ old('phone') }}" name="phone" >
											@error('phone')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										
										{{-- Salary --}}
										<div class="form-group">
											<label>Employee's Salary</label>
											<input type="number" class="form-control @error('salary') is-invalid @enderror " value="{{ old('salary') }}" name="salary" >
											@error('salary')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Email --}}
										<div class="form-group">
											<label>Employee's Email</label>
											<input type="email" class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}" name="email" >
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
													</div><input class="form-control fc-datepicker @error('start_date') is-invalid @enderror " value="{{ old('start_date') }}" type="text" name="start_date">
												</div>
                                            </div>
											@error('start_date')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										{{-- Avatar --}}
										<div class="col-sm-12 col-md-8">
											<input type="file" class="dropify" data-height="200" name="avatar"/>
											@error('avatar')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
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