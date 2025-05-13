

    {{-- <h2>Welcome, {{ Auth::user()->name }}</h2>
    <p>You are logged in!</p>

    <a   href="{{ route('employees.index') }}" method="GET" class="btn btn-primary">Employee</a>

    <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn {
            min-width: 150px;
        }
    </style>
</head>
<body>
    <div class="card p-5 animate__animated animate__fadeInDown">
        <h2 class="mb-3 text-center">Welcome, {{ Auth::user()->name }} 👋</h2>
        <p class="text-muted text-center">You are successfully logged in!</p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('employees.index') }}" class="btn btn-outline-primary animate__animated animate__pulse animate__infinite">
                View Employees
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger animate__animated animate__shakeX">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

