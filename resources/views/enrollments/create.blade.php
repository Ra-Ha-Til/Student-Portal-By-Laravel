@extends('layouts.app')

@section('title', 'Add Enrollment')

@section('content')
<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf
            <label>Enroll No</label><br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br>
            <label>Batch</label><br>
            <select name="batch_id" id="batch_id" class="form-control">
                @foreach($batches as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select><br>
            <label>Student</label><br>
            <select name="student_id" id="student_id" class="form-control">
                @foreach($students as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select><br>
            <label>Join Date</label><br>
            <input type="date" name="join_date" id="join_date" class="form-control"><br>
            <label>Fee</label><br>
            <input type="number" name="fee" id="fee" class="form-control" step="0.01"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection