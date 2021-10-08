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