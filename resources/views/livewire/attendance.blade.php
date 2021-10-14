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
            <table class="table table-striped mg-b-0 text-md-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Attendance</th>
                        <th>Num Of Min</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendance as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
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
                            <button class="btn btn-success-gradient btn-block" onclick="saveAttendance({{$item->id}})">save</button>
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


    $.ajax({
        method : "POST",
        url  : "cart",
        data  : {product_id : product_id, user_id : user_id },
        cache:false,
        success: function (data) {
            if(data.status)
            {
                Toast.fire({
                    icon: 'success',
                    title: 'Has Been Added To The Cart'
                })
                // Delete From display
                $(`#cart${cart_id}`).slideUp(600,function () {
                    $(`#cart${cart_id}`).remove();
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