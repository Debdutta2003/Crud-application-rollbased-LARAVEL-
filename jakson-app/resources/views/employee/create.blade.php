{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <style>
        .text-danger { color: red; }
    </style>
</head>
<body>

<h1>Create Employee</h1>

<!-- Show all validation errors (optional) -->
@if ($errors->any())
    <div class="text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('employees.store') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}" required><br>
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br>
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ old('phone') }}" required><br>
    @error('phone')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <br>

    <label>Position:</label>
    <input type="text" name="position" value="{{ old('position') }}" required><br>
    @error('position')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <br>

    <label>Salary:</label>
    <input type="number" step="0.01" name="salary" value="{{ old('salary') }}" required><br>
    @error('salary')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <br>

    <label>Status:</label>
    <select name="status" required>
        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <br><br>

    <button type="submit">Submit</button>
    <a href="{{ route('employees.index') }}">Cancel</a>
</form>

</body>
</html> --}}




























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            background: linear-gradient(to right, #f0f4f8, #ffffff);
            padding: 2rem;
        }
        .form-container {
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

<div class="form-container animate__animated animate__fadeInDown">
    <h2 class="mb-4 text-center">Create Employee</h2>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger animate__animated animate__fadeIn">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" name="position" class="form-control" value="{{ old('position') }}" required>
            @error('position')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Salary</label>
            <input type="number" step="0.01" name="salary" class="form-control" value="{{ old('salary') }}" required>
            @error('salary')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="">Choose...</option>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
