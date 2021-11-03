<div class="table-responsive">
    <table class="table  mg-b-0 text-md-nowrap">
        <thead>
            <tr>
                <th>رقم الموظف</th>
                <th>صورة الموظف</th>
                <th>اسم الموظف</th>
                <th>الوظيفة</th>
                <th>اجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($savedAttendance as $item)
            <tr id="attendance{{$item->id}}">
                <th scope="row">{{$item->id}}</th>
                <td>
                    <img alt="Responsive image" class="img-thumbnail thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}" >
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->position}}</td>
                <td>
                    <button class="btn btn-md btn-danger-gradient" wire:click.prevent="deleteAttendance({{$item->id}})">
                        حذف تسجيل الحضور
                        <i class="fas fa-trash-alt"></i>
                    </button> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><!-- bd -->