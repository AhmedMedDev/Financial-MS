<div class="table-responsive">
    <table class="table table-striped mg-b-0 text-md-nowrap">
        <thead>
            <tr>
                <th>رقم الموظف</th>
                <th>صورة الموظف</th>
                <th>اسم الموظف</th>
                <th>الوظيفة</th>
                <th>هل حضر</th>
                <th>التاريخ</th>
                <th>اجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($savedAttendance as $item)
            <tr>
                <th scope="row">{{$item->employee_id}}</th>
                <td>
                    <img alt="Responsive image" class="img-thumbnail thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}" >
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->position}}</td>
                <td> 
                    @if ($item->is_attende == 1)
                        <span class="tag tag-lime"> حضر</span> 
                    @else
                        <span class="tag tag-red">لم يحضر</span> 
                    @endif
                </td>
                <td>{{ date('d-M', strtotime($item->date)) }}</td>
                <td>
                    <button class="btn btn-md btn-danger-gradient" wire:click.prevent="deleteAttendance({{$item->id}})">
                        حذف من دفتر الحضور
                    </button> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><!-- bd -->