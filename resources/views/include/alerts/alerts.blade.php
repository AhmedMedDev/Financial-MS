@if(Session::has('successAlert'))
<script>
    Swal.fire(
      'Good job!',
      'You clicked the button!',
      'success'
    )
</script>
@endif

@if(Session::has('errorAlert'))
<script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
  })
</script>
@endif

<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			window.livewire.on('Toast-Alert', () => {
				Toast.fire({
					icon: 'success',
					title: 'Signed in successfully'
				})
			})

			window.livewire.on('Success-Alert', () => {
				Swal.fire(
					'Good job!',
					'You clicked the button!',
					'success'
				)
			})

			window.livewire.on('Error-Alert', () => {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
				})
			})

			window.livewire.on('Are-You-Sure', () => {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						livewire.emit('deleteConfirmed')
						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
						)
					}
				})
			})

			function confirmDelete (formID)
			{
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						document.getElementById(formID).submit()
					}
				})
			}
			window.livewire.on('added-successfully', () => {
				$('#create').modal('hide');
			})
			window.livewire.on('updated-successfully', () => {
				$('#edit').modal('hide');
			})
		</script>