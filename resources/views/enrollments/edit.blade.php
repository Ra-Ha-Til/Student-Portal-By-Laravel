@extends('layouts.app')

@section('title', 'Edit Enrollment')

@section('content')
<div class="card">
    <div class="card-header">Edit Enrollment</div>
    <div class="card-body">
        <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $enrollment->id }}">
            <label>Enroll No</label><br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"
                value="{{ $enrollment->enroll_no }}"><br>
            <label>Batch</label><br>
            <select name="batch_id" id="batch_id" class="form-control">
                @foreach($batches as $id => $name)
                <option value="{{ $id }}" {{ $enrollment->batch_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select><br>
            <label>Student</label><br>
            <select name="student_id" id="student_id" class="form-control">
                @foreach($students as $id => $name)
                <option value="{{ $id }}" {{ $enrollment->student_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select><br>
            <label>Join Date</label><br>
            <input type="date" name="join_date" id="join_date" class="form-control"
                value="{{ $enrollment->join_date }}"><br>
            <label>Fee</label><br>
            <input type="number" name="fee" id="fee" class="form-control" step="0.01"
                value="{{ $enrollment->fee }}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection