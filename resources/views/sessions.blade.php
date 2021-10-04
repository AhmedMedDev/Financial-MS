@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
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
							<button class="btn btn-success-gradient btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Create</button>
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
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th>ID</th>
												<th>Children</th>
												<th>Employee</th>
												<th>Cost</th>
												<th>Remaining</th>
												<th>Receipt</th>
												<th>Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>MR .Bahaa</td>
												<td>450 $</td>
												<td>0.00</td>
												<td>001625</td>
												<td>2006-10-6</td>
												<td>
													<a href="#" class="btn btn-md btn-primary-gradient">
														<i class="typcn typcn-briefcase"></i>
													</a>
													<a href="#" class="btn btn-md btn-info-gradient">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger-gradient">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Joan Powell</td>
												<td>MR .Bahaa</td>
												<td>450 $</td>
												<td>0.00</td>
												<td>001625</td>
												<td>2006-10-1</td>
												<td>
													<a href="#" class="btn btn-md btn-primary-gradient">
														<i class="typcn typcn-briefcase"></i>
													</a>
													<a href="#" class="btn btn-md btn-info-gradient">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger-gradient">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Joan Powell</td>
												<td>MR .Bahaa</td>
												<td>450 $</td>
												<td>0.00</td>
												<td>001625</td>
												<td>2006-10-25</td>
												<td>
													<a href="#" class="btn btn-md btn-primary-gradient">
														<i class="typcn typcn-briefcase"></i>
													</a>
													<a href="#" class="btn btn-md btn-info-gradient">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger-gradient">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Joan Powell</td>
												<td>MR .Bahaa</td>
												<td>450 $</td>
												<td>0.00</td>
												<td>001625</td>
												<td>2006-10-15</td>
												<td>
													<a href="#" class="btn btn-md btn-primary-gradient">
														<i class="typcn typcn-briefcase"></i>
													</a>
													<a href="#" class="btn btn-md btn-info-gradient">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger-gradient">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Joan Powell</td>
												<td>MR .Bahaa</td>
												<td>450 $</td>
												<td>0.00</td>
												<td>001625</td>
												<td>2006-10-8</td>
												<td>
													<a href="#" class="btn btn-md btn-primary-gradient">
														<i class="typcn typcn-briefcase"></i>
													</a>
													<a href="#" class="btn btn-md btn-info-gradient">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger-gradient">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>Joan Powell</td>
												<td>MR .Bahaa</td>
												<td>450 $</td>
												<td>0.00</td>
												<td>001625</td>
												<td>2006-12-17</td>
												<td>
													<a href="#" class="btn btn-md btn-primary-gradient">
														<i class="typcn typcn-briefcase"></i>
													</a>
													<a href="#" class="btn btn-md btn-info-gradient">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger-gradient">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection