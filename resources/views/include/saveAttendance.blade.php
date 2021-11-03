<div class="table-responsive">
    <table class="table table-striped mg-b-0 text-md-nowrap">
        <thead>
            <tr>
                <th>رقم الموظف</th>
                <th>صورة الموظف</th>
                <th>اسم الموظف</th>
                <th>هل حضر</th>
                <th>عدد دقائق التاخير</th>
                <th>اجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendance as $item)
            <tr id="attendance{{$item->id}}">
                <th scope="row">{{$item->id}}</th>
                <td>
                    <img alt="Responsive image" class="img-thumbnail thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}" >
                </td>
                <td>{{$item->name}}</td>
                <td>
                    <label class="switch" >
                        <input type="checkbox" id="is_attende{{$item->id}}" onclick="toggleActive({{$item->id}})">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>
                    <input type="number" class="form-control" id="delay_min{{$item->id}}" name="delay_min" placeholder="ادخل عدد الدقائق" disabled>
                </td>
                <td>
                    <button class="btn btn-success-gradient btn-block" onclick="saveAttendance({{$item->id}})">تسجيل</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><!-- bd -->