
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('EmpImport') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="emps" id="">
        <button type="submit">save</button>
    </form>
</div>
@endsection