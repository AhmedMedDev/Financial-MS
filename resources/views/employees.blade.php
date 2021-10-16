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
							<a class="modal-effect btn btn-success-gradient btn-with-icon btn-block" href="{{url('create-employee')}}"><i class="typcn typcn-edit"></i> Create</a>
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
						<!-- Modal effects -->
						<div class="modal" id="modaldemo8">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-demo">
									<div class="modal-header">
										<h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<h6>Modal Body</h6>
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-primary" type="button">Save changes</button>
										<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Modal effects-->
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
												<th>رقم الموظف</th>
												<th>صورة الموظف</th>
												<th>اسم الموظف</th>
												<th>الوظيفه</th>
												<th>الهاتف</th>
												<th>الراتب</th>
												<th>تاريخ العمل</th>
												<th>اجراءات</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($employees as $employee)
												<tr>
													<th scope="row">{{$employee->id}}</th>
													<td>{{$employee->name}}</td>
													<td>
														<img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
													</td>
													<td>{{$employee->position}}</td>
													<td>{{$employee->phone}}</td>
													<td>{{$employee->salary}}</td>
													<td>{{$employee->start_date}}</td>
													<td>
														<a href="{{url("employees/$employee->id/edit")}}" class="btn btn-md btn-info-gradient mg-t-2" >
															<i class="las la-pen"></i>
														</a>
														<button class="btn btn-md btn-danger-gradient mg-t-2" onclick="confirmDelete('deleteEmp{{$employee->id}}')">
															<i class="las la-trash"></i>
														</button>
													</td>
													<form action="{{url("employees/$employee->id")}}" method="post" id="deleteEmp{{$employee->id}}">
														@method('DELETE')
														@csrf
													</form>
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
