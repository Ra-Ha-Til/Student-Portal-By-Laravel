@extends('layouts.app')

@section('title', 'Batches')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Batches</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('batches.create') }}" class="btn btn-success btn-sm" title="Add New Batch">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $batch)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $batch->name }}</td>
                        <td>{{ $batch->course ? $batch->course->name : 'No Course' }}</td>
                        <td>{{ $batch->start_date }}</td>
                        <td>
                            <a href="{{ route('batches.show', $batch->id) }}" title="View Batch">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>
                            <a href="{{ route('batches.edit', $batch->id) }}" title="Edit Batch">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>
                            <form method="POST" action="{{ route('batches.destroy', $batch->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch"
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