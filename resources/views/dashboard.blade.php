@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">System Info</div>
            <div class="card-body">
                <p>Today Date: {{ now()->format('d M Y h:iA') }}</p>
                <p>Today Day: {{ now()->format('l') }}</p>
                <p>Your IP: {{ request()->ip() }}</p>
                <p>Your Browser: {{ request()->userAgent() }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-primary">
                    <div class="card-header">TOTAL STUDENTS</div>
                    <div class="card-body">
                        <h1 class="card-title">{{ $studentCount ?? 0 }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-white bg-success">
                    <div class="card-header">TOTAL TEACHERS</div>
                    <div class="card-body">
                        <h1 class="card-title">{{ $teacherCount ?? 0 }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-white bg-info">
                    <div class="card-header">TOTAL NOTICE</div>
                    <div class="card-body">
                        <h1 class="card-title">22</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Last 7 Days Site Activity</div>
            <div class="card-body">
                <canvas id="activityChart" height="100"></canvas>
            </div>
        </div>
    </div>

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('activityChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Today'],
                    datasets: [{
                        label: 'Student Registrations',
                        data: [12, 19, 3, 5, 2, 3, 7],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endsection
@endsection