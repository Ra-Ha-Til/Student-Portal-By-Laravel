@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="info-box">
            <h3>Good Morning</h3>
            <div class="row">
                <div class="col-md-3">
                    <p><strong>Today Date:</strong> {{ now()->format('d M Y h:iA') }}</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Today Day:</strong> {{ now()->format('l') }}</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Your IP:</strong> {{ request()->ip() }}</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Your Browser:</strong> {{ request()->header('User-Agent') }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="dashboard-card students">
                    <h3>TOTAL STUDENTS</h3>
                    <h1>{{ $studentCount }}</h1>
                    <a href="{{ route('students.index') }}" class="text-white">More Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dashboard-card teachers">
                    <h3>TOTAL TEACHERS</h3>
                    <h1>{{ $teacherCount }}</h1>
                    <a href="{{ route('teachers.index') }}" class="text-white">More Info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dashboard-card sms">
                    <h3>SMS BALANCE</h3>
                    <h1>9</h1>
                    <a href="#" class="text-white">More Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dashboard-card notices">
                    <h3>TOTAL NOTICE</h3>
                    <h1>22</h1>
                    <a href="#" class="text-white">More Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Last 7 Days Site Activity Graph
            </div>
            <div class="card-body">
                <canvas id="activityChart" height="100"></canvas>
            </div>
        </div>
    </div>

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Sample activity chart
            const ctx = document.getElementById('activityChart').getContext('2d');
            const activityChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Today'],
                    datasets: [{
                        label: 'Student Registrations',
                        data: [12, 19, 3, 5, 2, 3, 7],
                        backgroundColor: 'rgba(52, 152, 219, 0.2)',
                        borderColor: 'rgba(52, 152, 219, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Payments Received',
                        data: [8, 15, 10, 12, 6, 9, 14],
                        backgroundColor: 'rgba(46, 204, 113, 0.2)',
                        borderColor: 'rgba(46, 204, 113, 1)',
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