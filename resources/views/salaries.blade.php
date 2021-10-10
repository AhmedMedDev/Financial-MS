@extends('layouts.master')
@section('css')
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
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Avatar</th>
												<th>Employee</th>
												<th>Main Salary</th>
												<th>Deduction</th>
												<th>Extra</th>
												<th>Total</th>
												<th>For Month</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											@php
												$month = DB::select('SELECT CURDATE() AS curMonth');
											@endphp
											@foreach (DB::table('salaries')->get() as $item)
											<tr>
												<th scope="row">{{$item->employee_id}}</th>
												<td>
													<img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
												</td>
												<td>{{$item->name}}</td>
												<td>{{$item->main_salary}}</td>
												<td>{{$item->total_deduction}}</td>
												<td>{{$item->total_extra}}</td>
												<td>{{$item->main_salary + $item->total_extra - $item->total_deduction}}</td>
												<td> {{ $month[0]->curMonth }} </td>
												<td>
                                                    <button class="btn btn-info-gradient btn-block">receive salary</button>
                                                </td>
											</tr>
											@endforeach
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