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
            <table class="table table-striped mg-b-0 text-md-nowrap" id="example1">
                <thead>
                    <tr>
                        <th>رقم الموظف</th>
                        <th>صورة الموظف</th>
                        <th>اسم الموظف</th>
                        <th>المرتب الاساسى</th>
                        <th>اجمالى المخصوم</th>
                        <th>اجمالى المضاف</th>
                        <th>المرتب الكلى</th>
                        <th>لشهر</th>
                        <th>اجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salaries as $item)
                    <tr id="salary{{$item->employee_id}}">
                        <th scope="row">{{$item->employee_id}}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}">
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{number_format($item->main_salary, 2)}} EGP</td>
                        <td>{{number_format($item->total_deduction, 2)}} EGP</td>
                        <td>{{number_format($item->total_extra, 2)}} EGP</td>
                        <td>
                            @php
                                $finalsalary = $item->main_salary + $item->total_extra + $item->total_deduction
                            @endphp
                            {{number_format($finalsalary, 2)}} EGP
                         </td>
                        <td> {{$month}} </td>
                        <td>
                            <button class="btn btn-info-gradient btn-block" onclick="receivedSalary({{$item->employee_id}},'{{$item->name}}',{{$finalsalary}}, {{$month}})">تم استلام المرتب</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div><!-- bd -->
</div><!-- bd -->
