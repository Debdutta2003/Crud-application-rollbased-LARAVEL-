{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>

<h1>Edit Employee</h1>

<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $employee->name }}" required><br><br>
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Email:</label>
    <input type="email" name="email" value="{{ $employee->email }}" required><br><br>
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ $employee->phone }}" required><br><br>
    @error('phone')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Position:</label>
    <input type="text" name="position" value="{{ $employee->position }}" required><br><br>
    @error('position')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Salary:</label>
    <input type="number" name="salary" value="{{ $employee->salary }}" step="0.01" required><br><br>
    @error('salary')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Status:</label>
    <select name="status" required>
        <option value="active" {{ $employee->status === 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $employee->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select><br><br>

    <button type="submit">Update</button>
    <a href="{{ route('employees.index') }}">Cancel</a>
</form>

</body>
<style>
    .text-danger {
        color: red;
    }
</style>
</html> --}}
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #ffffff);
            padding: 2rem;
        }
        .form-card {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="form-card animate__animated animate__fadeInDown">
    <h2 class="mb-4 text-center">Edit Employee</h2>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $employee->email }}" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" required>
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required>
            @error('position')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Salary</label>
            <input type="number" step="0.01" name="salary" class="form-control" value="{{ $employee->salary }}" required>
            @error('salary')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="active" {{ $employee->status === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $employee->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
