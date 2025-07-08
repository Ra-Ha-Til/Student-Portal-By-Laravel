@extends('layouts.app')

@section('title', 'Edit Payment')

@section('content')
<div class="card">
    <div class="card-header">Edit Payment</div>
    <div class="card-body">
        <form action="{{ route('payments.update', $payment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $payment->id }}">
            <label>Enrollment</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id => $enroll_no)
                <option value="{{ $id }}" {{ $payment->enrollment_id == $id ? 'selected' : '' }}>{{ $enroll_no }}
                </option>
                @endforeach
            </select><br>
            <label>Paid Date</label><br>
            <input type="date" name="paid_date" value="{{ $payment->paid_date }}" class="form-control"><br>
            <label>Amount</label><br>
            <input type="number" name="amount" value="{{ $payment->amount }}" class="form-control" step="0.01"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection