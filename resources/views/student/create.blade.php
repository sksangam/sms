@extends('layouts.main')


@section('content')
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-justify-center align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Add Students</h6>
            <a href="{{ route('student.index') }}" class="btn btn-sm btn-success ml-auto">All Student</a>
        </div>
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name"  class="form-control" placeholder="Enter name">
                  {{-- <small class="form-text text-muted">abc.</small> --}}
                </div>
                <div class="form-group">
                <label>Father Name</label>
                  <input type="text" name="father_name"  class="form-control" placeholder="Enter father name">
                  {{-- <small class="form-text text-muted">abc.</small> --}}
                </div>
                <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"  class="form-control" placeholder="Enter email">
                {{-- <small class="form-text text-muted">abc.</small> --}}
              </div>
              <div class="form-group">
              <label>Phone</label>
                  <input type="text" name="phone"  class="form-control" placeholder="Enter phone">
                  {{-- <small class="form-text text-muted">abc.</small> --}}
                </div>
                <div class="form-group">
                    <label>Address</label>
                        <textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea>
                        {{-- <small class="form-text text-muted">abc.</small> --}}
                      </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

</div>
@endsection
