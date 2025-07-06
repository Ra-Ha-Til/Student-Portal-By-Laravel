@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Students Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary mb-1">
                            Total Students</div>
                        <div class="h5 mb-0 font-weight-bold">{{ $stats['students'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Teachers Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success mb-1">
                            Total Teachers</div>
                        <div class="h5 mb-0 font-weight-bold">{{ $stats['teachers'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info mb-1">
                            Active Courses</div>
                        <div class="h5 mb-0 font-weight-bold">{{ $stats['courses'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning mb-1">
                            Total Revenue</div>
                        <div class="h5 mb-0 font-weight-bold">${{ number_format($stats['revenue'], 2) }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Enrollments -->
    <div class="col-lg-6 mb-4">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold">Recent Enrollments</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Enroll No</th>
                                <th>Student</th>
                                <th>Course</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stats['recentEnrollments'] as $enrollment)
                            <tr>
                                <td>{{ $enrollment->enroll_no }}</td>
                                <td>{{ $enrollment->student->name }}</td>
                                <td>{{ $enrollment->batch->course->name }}</td>
                                <td>{{ $enrollment->join_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Payments -->
    <div class="col-lg-6 mb-4">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold">Recent Payments</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Payment ID</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Student</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stats['recentPayments'] as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>${{ number_format($payment->amount, 2) }}</td>
                                <td>{{ $payment->paid_date }}</td>
                                <td>{{ $payment->enrollment->student->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection