@extends('layouts.master')
@section('css')
<style>
	.card-table-two .table-responsive {
		width: auto !important;
	}
</style>
@endsection
@section('page-header')
		<div class="left-content">
			<div>
				<h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
				<p class="mg-b-0">Sales monitoring dashboard template.</p>
			</div>
		</div>
		<div class="main-dashboard-header-right">
			<div>
				<label class="tx-13">Net profit</label>
				<h5>563,275</h5>
			</div>
			<div>
				<label class="tx-13">Loss</label>
				<h5>783,675</h5>
			</div>
		</div>
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">عدد الاطفال</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
												{{DB::table('childrens')->count()}}
											</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> +427</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالى الصادرات لهذا الشهر</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
												{{number_format(DB::table('financial_operations')->where('status', 0)->sum('amount'),2)}} EGP
											</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -23.09%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالى الواردات لهذا الشهر</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
												{{number_format(DB::table('financial_operations')->where('status', 1)->sum('amount'),2)}} EGP
											</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> 52.09%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">عدد الموظفين</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">
												{{DB::table('employees')->count()}}
											</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -152.3</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					{{--  --}}
					<div class="col-md-12 col-lg-12 col-xl-7">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-0">Order status</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
							</div>
							<div class="card-body">
								<div class="total-revenue">
									<div>
									  <h4>120,750</h4>
									  <label><span class="bg-primary"></span>success</label>
									</div>
									<div>
									  <h4>56,108</h4>
									  <label><span class="bg-danger"></span>Pending</label>
									</div>
									<div>
									  <h4>32,895</h4>
									  <label><span class="bg-warning"></span>Failed</label>
									</div>
								  </div>
								<div id="bar" class="sales-bar mt-4"></div>
							</div>
						</div>
					</div>
					{{--  --}}
					<div class="col-lg-12 col-xl-5">
						<div class="card">
							<div class="" style="text-align: center">
								<img src="https://i.pinimg.com/originals/d7/ae/01/d7ae0170d3d5ffcbaa7f02fdda387a3b.gif" alt="" style="max-height: 368px;">
							</div>
						</div>
					</div>
					{{--  --}}
				</div>
				<!-- row closed -->

				<!-- row opened 1 -->
				<div class="row row-sm row-deck">
					{{-- الواردات المضافة مؤخرا --}}
					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">الواردات المضافة مؤخرا</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الواردات المضافة مؤخرا</span>
							<div class="table-responsive ">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">المبلغ</th>
											<th class="wd-lg-25p tx-right">السبب</th>
										</tr>
									</thead>
									<tbody>
										@php
											$imports = DB::table('financial_operations')
														->where('status',0)
            											->orderBy('id', 'desc')
														->limit(5)->get()
										@endphp
										@foreach ($imports as $item)
										<tr>
											<td class="tx-right tx-medium tx-success">{{$item->amount}} EGP</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->reason}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					{{-- الجلسات المضافة مؤخرا --}}
					<div class="col-md-12 col-lg-8 col-xl-8">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">الجلسات المضافة مؤخرا</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الجلسات المضافة مؤخرا</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">اسم الطفل</th>
											<th class="wd-lg-25p tx-right">اسم الاخصائى</th>
											<th class="wd-lg-15p tx-right">تكلفة الجلسة</th>
											<th class="wd-lg-15p tx-right">ربح المركز</th>
											<th class="wd-lg-25p">التاريخ</th>
										</tr>
									</thead>
									<tbody>
										@php
											$sessions = DB::table('sessions')
            											->orderBy('session_id', 'desc')
														->limit(5)->get()
										@endphp
										@foreach ($sessions as $item)
										<tr>
											<td class="tx-right tx-medium tx-inverse">
												{{$item->child_name}}	
											</td>
											<td class="tx-right tx-medium tx-inverse">
												{{$item->emp_name}}	
											</td>
											<td class="tx-right tx-medium tx-inverse">
												{{$item->amount}}	
											</td>
											<td class="tx-right tx-medium tx-success">
												{{number_format($item->amount * 1/3, 2)}} EGP
											</td>
											<td class="tx-right tx-medium tx-inverse">
												{{ date('d-M', strtotime($item->date) ) }}	
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					{{--  --}}
				</div>
				<!-- /row -->

				<!-- row opened 2 -->
				<div class="row row-sm row-deck">
					{{-- الصادرات المضافة مؤخرا --}}
					<div class="col-md-12 col-lg-4 col-xl-6">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">الصادرات المضافة مؤخرا</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الجلسات المضافة مؤخرا</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">المبلغ</th>
											<th class="wd-lg-25p tx-right">السبب</th>
										</tr>
									</thead>
									<tbody>
										@php
											$exports = DB::table('financial_operations')
														->where('status',1)
            											->orderBy('id', 'desc')
														->limit(5)->get()
										@endphp
										@foreach ($exports as $item)
										<tr>
											<td class="tx-right tx-medium tx-danger">{{number_format($item->amount, 2)}} EGP</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->reason}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					{{-- الخصومات المضافة مؤخرا --}}
					<div class="col-md-12 col-lg-8 col-xl-6">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">الخصومات المضافة مؤخرا</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الجلسات المضافة مؤخرا</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">اسم الموظف</th>
											<th class="wd-lg-25p tx-right">البملغ</th>
											<th class="wd-lg-25p tx-right">السبب</th>
											<th class="wd-lg-25p">التاريخ</th>
										</tr>
									</thead>
									<tbody>
										@php
											$deductions = DB::table('salary_changes_emp')
        										->where('status', 0)->orderBy('change_id', 'desc')->get();
										@endphp	
										@foreach ($deductions as $item)
										<tr>
											<td class="tx-right tx-medium tx-inverse">
												{{$item->name}}
											</td>
											<td class="tx-right tx-medium tx-danger">
												{{number_format($item->amount, 2)}} EGP
											</td>
											<td class="tx-right tx-medium tx-inverse">
												{{$item->reason}}
											</td>
											<td class="tx-right tx-medium tx-inverse">
												{{ date('d-M', strtotime($item->date)) }}
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row opened 3 -->
				<div class="row row-sm">
					{{-- الموظفين المضافيين مؤخرا --}}
					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">الموظفين المضافيين مؤخرا</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الجلسات المضافة مؤخرا</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">اسم الموظف</th>
											<th class="wd-lg-25p tx-right">الوظيفة</th>
										</tr>
									</thead>
									<tbody>
										@php
											$employees = DB::table('employees')
															->orderByDesc('id')
															->limit(5)->get()
										@endphp
										@foreach ($employees as $item)
										<tr>
											<td class="tx-right tx-medium tx-inverse">{{$item->name}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->position}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					{{-- الاطفال المضافيين مؤخرا --}}
					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">الاطفال المضافيين مؤخرا</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الجلسات المضافة مؤخرا</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">اسم الطفل</th>
											<th class="wd-lg-25p tx-right">التاريخ</th>
										</tr>
									</thead>
									<tbody>
										@php
											$childrens = DB::table('childrens')
														->orderByDesc('id')->get()
										@endphp	
										@foreach ($childrens as $item)
										<tr>
											<td class="tx-right tx-medium tx-inverse">{{$item->child_name}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->date}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					{{-- دفتر غياب اليوم --}}
					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">دفتر غياب اليوم</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">موجز سريع يعرض البيانات الاساسية عن الجلسات المضافة مؤخرا</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p tx-right">اسم الموظف</th>
											<th class="wd-lg-25p tx-right">الوظيفة</th>
										</tr>
									</thead>
									<tbody>
										@php
											$employees = DB::table('absences')
														->orderByDesc('date')
														->limit(5)->get()
										@endphp
										@foreach ($employees as $item)
										<tr>
											<td class="tx-right tx-medium tx-inverse">{{$item->name}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->position}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- row close -->
				
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
{{-- <script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script> --}}
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection