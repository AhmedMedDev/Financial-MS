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
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th>Emp ID</th>
												<th>avatar</th>
												<th>Employee</th>
												<th>delay's minutes</th>
												<th>Deduction</th>
												<th>for month</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach (DB::select('SELECT * FROM employees JOIN total_delaies ON (employees.id = total_delaies.employee_id)') as $item)
											<tr>
												<th scope="row">{{$item->employee_id}}</th>
												<td>
                                                    <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                                                </td>
												<td>{{$item->name}}</td>
												<td>{{$item->total_delay}}</td>
												<td> 
													{{($item->total_delay / 120 ) * $item->day_price}}
												</td>
												<td>{{$item->month}}</td>
												<td>
                                                    <button class="btn btn-danger-gradient btn-block">Deduction from salary</button>
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
