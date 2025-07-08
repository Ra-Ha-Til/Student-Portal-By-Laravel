@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <div class="card">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $student->id }}">
                <label>Name</label><br>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control"><br>
                <label>Address</label><br>
                <input type="text" name="address" value="{{ $student->address }}" class="form-control"><br>
                <label>Mobile</label><br>
                <input type="text" name="mobile" value="{{ $student->mobile }}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection