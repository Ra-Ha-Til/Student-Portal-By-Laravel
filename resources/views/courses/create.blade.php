@extends('layouts.app')

@section('title', 'Add Course')

@section('content')
<div class="card">
    <div class="card-header">Course Details</div>
    <div class="card-body">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Syllabus</label><br>
            <input type="text" name="syllabus" id="syllabus" class="form-control"><br>
            <label>Duration</label><br>
            <input type="text" name="duration" id="duration" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection