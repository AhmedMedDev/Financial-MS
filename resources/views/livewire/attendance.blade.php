<div class="card">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0">دفتر حضور الموظفين</h4>
            <i class="mdi mdi-dots-horizontal text-gray"></i>
        </div>
        <p class="tx-12 tx-gray-500 mb-2">لاتنسى حفظ العميلة بعد الانتهاء</p>
    </div>
    <div class="card-body">
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
                            <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}">
                        </td>
                        <td>{{$item->name}}</td>
                        <td>
                            <div class="main-toggle main-toggle-success on" id="is_attende{{$item->id}}">
                                <span></span>
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control" id="delay_min{{$item->id}}" name="delay_min" placeholder="Mins" value="0">
                        </td>
                        <td>
                            <button class="btn btn-success-gradient btn-block" onclick="saveAttendance({{$item->id}})">تسجيل</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div><!-- bd -->
</div>
<script>



function saveAttendance (empID)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var is_attende = ($(`#is_attende${empID}`).hasClass('on')) ? 1 : 0
    var delay_min = $(`#delay_min${empID}`).val()
    var employee_id = empID

    $.ajax({
        method : "POST",
        url  : "attendance_lists",
        data  : {employee_id, is_attende, delay_min},
        cache:false,
        success: function (data) {
            if(data.status)
            {
                Swal.fire(
					'Good job!',
					'You clicked the button!',
					'success'
				)
                // Delete From display
                $(`#attendance${empID}`).slideUp(600,function () {
                    $(`#attendance${empID}`).remove();
                });
            }
        },
        error: function (data) {
            console.log('Error:', data);
            Swal.fire(
                'Oops...',
                'Something went wrong!',
                'error'
            )
        }
    })

}
</script>