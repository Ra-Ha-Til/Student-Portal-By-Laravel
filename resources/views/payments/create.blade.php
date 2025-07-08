@extends('layouts.app')

@section('title', 'Add Payment')

@section('content')
<div class="card">
    <div class="card-header">Payment</div>
    <div class="card-body">
        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <label>Enrollment</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
                @endforeach
            </select><br>
            <label>Paid Date</label><br>
            <input type="date" name="paid_date" id="paid_date" class="form-control"><br>
            <label>Amount</label><br>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection