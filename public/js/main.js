function saveAttendance (empID)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var is_attende = ($(`#is_attende${empID}`).hasClass('on')) ? 1 : 0
    var delay_min = ($(`#delay_min${empID}`).val() == '') ? 0 : $(`#delay_min${empID}`).val()
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