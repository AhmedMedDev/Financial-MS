<div class="table-responsive">
    <table class="table text-md-nowrap" id="example1">{{-- example1 --}}
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
                @if ($item->month != date('m'))
                    <tr>
                        <th scope="row">{{ $item->employee_id }}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail thumbnail wd-55p wd-sm-55"
                                src="{{ asset('assets/img/photos/1.jpg') }}">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->total_delay }} دقيقة</td>
                        <td>
                            {{ number_format($amount = ((int) ($item->total_delay / 120)) * $item->day_price, 2) }}
                            EGP
                        </td>
                        <td>{{ $item->month }}</td>
                        <td>
                            <button class="btn btn-secondary-gradient btn-block">
                                خصم من المرتب
                            </button>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
