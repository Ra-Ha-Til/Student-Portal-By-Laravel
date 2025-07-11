@extends('layouts.app')

@section('title', 'Enrollments')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Enrollment Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enroll No</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $enrollment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $enrollment->enroll_no }}</td>
                        <td>{{ $enrollment->batch ? $enrollment->batch->name : 'N/A' }}</td>
                        <td>{{ $enrollment->student ? $enrollment->student->name : 'N/A' }}</td>
                        <td>{{ $enrollment->join_date }}</td>
                        <td>{{ $enrollment->fee }}</td>
                        <td>
                            <a href="{{ route('enrollments.show', $enrollment->id) }}" title="View Enrollment">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>
                            <a href="{{ route('enrollments.edit', $enrollment->id) }}" title="Edit Enrollment">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>
                            <form method="POST" action="{{ route('enrollments.destroy', $enrollment->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment"
                                    onclick="return confirm('Confirm delete?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection