@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="card">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $course->id }}">
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $course->name }}" class="form-control"><br>
            <label>Syllabus</label><br>
            <input type="text" name="syllabus" value="{{ $course->syllabus }}" class="form-control"><br>
            <label>Duration</label><br>
            <input type="text" name="duration" value="{{ $course->duration }}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection