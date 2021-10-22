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
            <table class="table text-md-nowrap" id="">{{-- example1 --}}
                <thead>
                    <tr>
                        <th>رقم الموظف</th>
                        <th>صورة الموظف</th>
                        <th>اسم الموظف</th>
                        <th>اجمالى دقائق التاخير</th>
                        <th>قميم الخصم</th>
                        <th>لشهر</th>
                        <th>اجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($delaies as $item)
                    <tr>
                        <th scope="row">{{$item->employee_id}}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}">
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->total_delay}}</td>
                        <td> 
                            {{ number_format($amount = ($item->total_delay / 120 ) * $item->day_price, 2) }}
                        </td>
                        <td>{{$item->month}}</td>
                        <td>
                            <button class="btn btn-danger-gradient btn-block"  
                                wire:click.prevent="deductionFromSalary({{$item->employee_id}},{{$amount}},{{$item->month}})">
                                خصم من المرتب
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div><!-- bd -->
</div><!-- bd -->
