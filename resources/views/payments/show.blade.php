@extends('layouts.app')

@section('title', 'View Payment')

@section('content')
<div class="card">
    <div class="card-header">Payment Details</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enrollment No: {{ $payment->enrollment->enroll_no }}</h5>
            <p class="card-text">Paid Date: {{ $payment->paid_date }}</p>
            <p class="card-text">Amount: {{ $payment->amount }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection