<div class="table-responsive">
    <table class="table text-md-nowrap" id="example1">{{-- example1 --}}
        <thead>
            <tr>
                <th>رقم الموظف</th>
                <th>صورة الموظف</th>
                <th>اسم الموظف</th>
                <th>قمية الخصم</th>
                <th>التاريخ</th>
                <th>اجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absences as $item)
                @if ($item->month != date('m'))
                    <tr>
                        <th scope="row">{{ $item->employee_id }}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail thumbnail wd-55p wd-sm-55"
                                src="{{ asset('assets/img/photos/1.jpg') }}">
                        </td>
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @php
                                $amount = $item->day_price;
                                $day = date('l', strtotime($item->date));
                                
                                if ($day == 'Thursday' || $day == 'Sunday') {
                                    $amount *= 2;
                                }
                            @endphp
                            {{ number_format($amount, 2) }} EGP
                        </td>
                        <td>{{ date('d-M', strtotime($item->date)) }}</td>
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
