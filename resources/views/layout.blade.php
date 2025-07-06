<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #d1d1d1;
            display: block;
        }

        .sidebar a:hover {
            color: #fff;
            background: #495057;
        }

        .sidebar a.active {
            color: #fff;
            background: #007bff;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1rem 1.35rem;
            font-weight: 600;
        }
    </style>

    @yield('styles')
</head>

<body>
    <div class="sidebar">
        <a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('students.index') }}" class="{{ Request::is('students*') ? 'active' : '' }}">
            <i class="fas fa-users"></i> Students
        </a>
        <a href="{{ route('teachers.index') }}" class="{{ Request::is('teachers*') ? 'active' : '' }}">
            <i class="fas fa-chalkboard-teacher"></i> Teachers
        </a>
        <a href="{{ route('courses.index') }}" class="{{ Request::is('courses*') ? 'active' : '' }}">
            <i class="fas fa-book"></i> Courses
        </a>
        <a href="{{ route('batches.index') }}" class="{{ Request::is('batches*') ? 'active' : '' }}">
            <i class="fas fa-layer-group"></i> Batches
        </a>
        <a href="{{ route('enrollments.index') }}" class="{{ Request::is('enrollments*') ? 'active' : '' }}">
            <i class="fas fa-clipboard-list"></i> Enrollments
        </a>
        <a href="{{ route('payments.index') }}" class="{{ Request::is('payments*') ? 'active' : '' }}">
            <i class="fas fa-money-bill-wave"></i> Payments
        </a>
        <a href="/phpmyadmin" target="_blank" class="mt-4">
            <i class="fas fa-database"></i> phpMyAdmin
        </a>
    </div>

    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-graduation-cap"></i> Student Portal
                </a>
                <div class="navbar-nav ml-auto">
                    <span class="navbar-text me-3">
                        <i class="fas fa-database text-primary"></i> MySQL
                    </span>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle"></i> Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>

</html>