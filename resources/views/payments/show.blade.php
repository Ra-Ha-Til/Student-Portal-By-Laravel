@extends('layouts.app')

@section('title', 'View Batch')

@section('content')
<div class="card">
    <div class="card-header">Batch Details</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $batch->name }}</h5>
            <p class="card-text">Course: {{ $batch->course->name }}</p>
            <p class="card-text">Start Date: {{ $batch->start_date }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection