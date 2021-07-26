@extends('layouts.main')

@section('title','All Students')

@section('content')
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-justify-center align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
            <a href="{{ route('student.create') }}" class="btn btn-sm btn-success ml-auto">Add Student</a>
        </div>
        <div class="card-body">
            @if (Session('success'))
                <div class="alert alert-success">
                    {{ Session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->father_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-primary ml-auto">Edit</a>

                                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="text-center">No records available</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
