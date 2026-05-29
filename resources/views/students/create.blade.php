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

           @error('name')
           <div class="text-danger mt-1">
              {{$message}}
           </div>
           @enderror

    <input type="email"
           name="email"
           class="form-control mb-3"
           placeholder="Enter Email">
           
          @error('email')
           <div class="text-danger mt-1">
              {{$message}}
           </div>
           @enderror

    <input type="text"
           name="program"
           class="form-control mb-3"
           placeholder="Enter Program">

           @error('program')
           <div class="text-danger mt-1">
              {{$message}}
           </div>
           @enderror

    <button class="btn btn-success">

        Save Student

    </button>

</form>

@endsection