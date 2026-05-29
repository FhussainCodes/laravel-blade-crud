@extends('layouts.app')

@section('content')

<h2>Edit Student</h2>

<form action="{{ route('students.update', $student->id) }}"
      method="POST">

    @csrf

    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $student->name }}"
           class="form-control mb-3">

    <input type="email"
           name="email"
           value="{{ $student->email }}"
           class="form-control mb-3">

    <input type="text"
           name="program"
           value="{{ $student->program }}"
           class="form-control mb-3">

    <button class="btn btn-primary">

        Update Student

    </button>

</form>

@endsection