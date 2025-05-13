{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

<h1>Employee List</h1>

<form action="{{ route('employees.index') }}" method="GET">
    <input type="text" name="search" value="{{ request()->search }}" placeholder="Search by name, email, or position" />
    <button type="submit">Search</button>
</form>




@if (session('success'))
    <div class="alert alert-success" style="color: green; font-weight: bold;">
        {{ session('success') }}
    </div>
@endif

<!-- Create Button -->
<a href="{{ route('employees.create') }}">
    <button style="margin-bottom: 15px;">Create</button>
</a>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Actions</th> <!-- New column for buttons -->
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->position }}</td>
                <td>${{ number_format($employee->salary, 2) }}</td>
                <td>{{ $employee->status }}</td>
                <td>
                    <!-- Update Button -->
                    <a href="{{ route('employees.edit', $employee->id) }}">
                        <button>Update</button>
                    </a>

                    <!-- Delete Button -->
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 20px;">
    {{ $employees->links() }}
</div>

</body>
</html> --}}























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #ffffff);
            padding: 2rem;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        table th, table td {
            vertical-align: middle;
        }
        .btn-sm {
            padding: 0.25rem 0.75rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4 animate__animated animate__fadeInUp">
        <h2 class="text-center mb-4">Employee List</h2>

        <!-- Search Form -->
        <form action="{{ route('employees.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" value="{{ request()->search }}" class="form-control" placeholder="Search by name, email, or position">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </form>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success animate__animated animate__fadeInDown">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Button -->
        <div class="mb-3 text-end">
            <a href="{{ route('employees.create') }}" class="btn btn-success">➕ Create</a>
        </div>

        <!-- Employee Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle animate__animated animate__fadeIn">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>${{ number_format($employee->salary, 2) }}</td>
                        <td>
                            <span class="badge {{ $employee->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($employee->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">✏️ Update</a>

                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">🗑️ Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No employees found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $employees->links() }}
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
