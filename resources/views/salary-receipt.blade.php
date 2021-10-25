@extends('layouts.master')
@section('css')
<style>
	.invoice-info-row {
		font-size: 17px !important ;
	}
	@media print {
		#print_Button {
			display: none;
		}
	}
</style>
@endsection
@section('page-header')
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">فواتير</h4>
			<span class="text-muted mt-1 tx-13 mr-2 mb-0">/ سند صرف</span>
		</div>
	</div>
	@include('layouts.page-header2')
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-12">
						<div class=" main-content-body-invoice" id="print">
							<div class="card card-invoice">
								<div class="card-body">
									<div class="invoice-header">
										<h1 class="invoice-title">سند صرف راتب</h1>
										<div class="billed-from">
											<h6>مركز هارفست.</h6>
											<p class="invoice-info-row">
												12 شارع عبد الشافى محمد الحى السابع مدينة نصر <br>
												هاتف : 01001090613 <br>
												موقعنا : harvest-center.com
											</p>
										</div><!-- billed-from -->
									</div><!-- invoice-header -->
									<div class="row mg-t-20">
										<div class="col-md">
											{{-- <label class="tx-gray-600">Invoice Information</label> --}}
											<p class="invoice-info-row"><span>رقم الفاتورة</span> <span>GHT-673-00</span></p>
											<p class="invoice-info-row"><span>مدفوعة الى</span> <span>32334300</span></p>
											<p class="invoice-info-row"><span>وذلك لسبب</span> <span>32334300</span></p>
											<p class="invoice-info-row"><span>تاريخ الاصدار:</span> <span>November 21, 2017</span></p>
											<p class="invoice-info-row"><span>تاريخ الاسحقاق:</span> <span>November 30, 2017</span></p>
										</div>
										<div class="col-md">
											<label class="tx-gray-600" style="font-size: 17px;">تفاصيل الفاتورة</label>
											<p class="invoice-info-row"><span>الراتب الاساسى</span> <span>GHT-673-00</span></p>
											<p class="invoice-info-row"><span>الاضافى</span> <span>32334300</span></p>
											<p class="invoice-info-row"><span>المخصوم</span> <span>November 21, 2017</span></p>
											<p class="invoice-info-row"><span>الاجمالى</span> <span class="tx-primary tx-bold" style="font-size: 21px;">4360 EGP</span></p>
										</div>
									</div>
									{{-- <div class="table-responsive mg-t-40">
										<table class="table table-invoice border text-md-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-20p">Type</th>
													<th class="wd-40p">Description</th>
													<th class="tx-center">QNTY</th>
													<th class="tx-right">Unit Price</th>
													<th class="tx-right">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Website Design</td>
													<td class="tx-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$150.00</td>
													<td class="tx-right">$300.00</td>
												</tr>
												<tr>
													<td>Firefox Plugin</td>
													<td class="tx-12">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td>
													<td class="tx-center">1</td>
													<td class="tx-right">$1,200.00</td>
													<td class="tx-right">$1,200.00</td>
												</tr>
												<tr>
													<td>iPhone App</td>
													<td class="tx-12">Et harum quidem rerum facilis est et expedita distinctio</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$850.00</td>
													<td class="tx-right">$1,700.00</td>
												</tr>
												<tr>
													<td>Android App</td>
													<td class="tx-12">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
													<td class="tx-center">3</td>
													<td class="tx-right">$850.00</td>
													<td class="tx-right">$2,550.00</td>
												</tr>
												<tr>
													<td class="valign-middle" colspan="2" rowspan="4">
														<div class="invoice-notes">
															<label class="main-content-label tx-13">Invoice Information</label>
															<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
														</div><!-- invoice-notes -->
													</td>
													<td class="tx-right">Sub-Total</td>
													<td class="tx-right" colspan="2">$5,750.00</td>
												</tr>
												<tr>
													<td class="tx-right">Tax (5%)</td>
													<td class="tx-right" colspan="2">$287.50</td>
												</tr>
												<tr>
													<td class="tx-right">Discount</td>
													<td class="tx-right" colspan="2">-$50.00</td>
												</tr>
												<tr>
													<td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
													<td class="tx-right" colspan="2">
														<h4 class="tx-primary tx-bold">$5,987.50</h4>
													</td>
												</tr>
											</tbody>
										</table>
									</div> --}}
									<hr class="mg-b-40">
									<a class="btn btn-purple float-left mt-3 mr-2" href="">
										<i class="mdi mdi-currency-usd ml-1"></i>Pay Now
									</a>
									<button href="#" class="btn btn-danger float-left mt-3 mr-2" id="print_Button" onclick="printDiv()">
										<i class="mdi mdi-printer ml-1"></i>Print
									</button>
									<a href="#" class="btn btn-success float-left mt-3">
										<i class="mdi mdi-telegram ml-1"></i>Send Invoice
									</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<script type="text/javascript">
	function printDiv() {
		var printContents = document.getElementById('print').innerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		document.body.innerHTML = originalContents;
		location.reload();
	}
</script>
@endsection