

function toggleActive (empID) {

    $(`#is_attende${empID}`).toggleClass('on')

    $(`#delay_min${empID}`).prop('disabled',!$(`#delay_min${empID}`).prop('disabled'))

    if ($(`#delay_min${empID}`).prop('disabled')) $(`#delay_min${empID}`).val('')
}


function saveAttendance (empID) {

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

function receivedSalary (employee_id, name, finalsalary, month) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var receipt = $(`#receipt${employee_id}`).val()

    $.ajax({
        method : "POST",
        url  : "receivedSalary",
        data  : {employee_id, name, finalsalary, month, receipt},
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
                $(`#salary${employee_id}`).slideUp(600,function () {
                    $(`#salary${employee_id}`).remove();
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