@extends('layouts.main')

@section('title','Add Student')

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
                    <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <p class="form-text text-danger"><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="father_name"  class="form-control @error('father_name') is-invalid @enderror" value="{{ old('father_name') }}" placeholder="Enter father name">
                    @error('father_name')
                        <span class="invalid-feedback" role="alert">
                            <p class="form-text text-danger"><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <p class="form-text text-danger"><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"placeholder="Enter phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <p class="form-text text-danger"><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" id="" cols="30" rows="3" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <p class="form-text text-danger"><strong>{{ $message }}</strong></p>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection
