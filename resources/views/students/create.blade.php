@extends('layouts.app')

@section('content')

<h2>Add Student</h2>

<form action="{{ route('students.store') }}"
      method="POST">

    @csrf

    <input type="text"
           name="name"
           class="form-control mb-3"
           placeholder="Enter Name">

    <input type="email"
           name="email"
           class="form-control mb-3"
           placeholder="Enter Email">

    <input type="text"
           name="program"
           class="form-control mb-3"
           placeholder="Enter Program">

    <button class="btn btn-success">

        Save Student

    </button>

</form>

@endsection