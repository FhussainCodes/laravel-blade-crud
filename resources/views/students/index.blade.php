@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold text-primary">
            🎓 All Students
        </h2>

        <a href="{{ route('students.create') }}"
           class="btn btn-primary rounded-pill px-4 shadow-sm">

            ➕ Add Student

        </a>

    </div>

    <div class="card shadow border-0 rounded-4">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Program</th>
                        <th width="220">Actions</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($students as $student)

                    <tr>

                        <td>
                            <span class="badge bg-secondary">
                                {{ $student->id }}
                            </span>
                        </td>

                        <td class="fw-semibold">
                            {{ $student->name }}
                        </td>

                        <td>
                            {{ $student->email }}
                        </td>

                        <td>
                            <span class="badge bg-info text-dark px-3 py-2">
                                {{ $student->program }}
                            </span>
                        </td>

                        <td>

                            <div class="d-flex gap-2">

                                <a href="{{ route('students.edit', $student->id) }}"
                                   class="btn btn-warning btn-sm rounded-pill px-3 shadow-sm">

                                    ✏️ Edit

                                </a>

                                <form action="{{ route('students.destroy', $student->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm rounded-pill px-3 shadow-sm"
                                            onclick="return confirm('Are you sure you want to delete this record?')">

                                        🗑️ Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection