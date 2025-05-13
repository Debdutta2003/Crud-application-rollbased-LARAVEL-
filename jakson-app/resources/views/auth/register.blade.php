
{{-- 
    <h2>Register</h2>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
 --}}







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Custom Styles -->
  <style>
    body {
      background: linear-gradient(to right, #74ebd5, #ACB6E5);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .register-card {
      background: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
    }
  </style>
</head>
<body>

<div class="register-card animate__animated animate__fadeInDown">
  <h2 class="text-center mb-4">Register</h2>

  @if($errors->any())
    <div class="alert alert-danger animate__animated animate__fadeIn">
      <ul class="mb-0">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
      <div class="invalid-feedback">
        Please enter your name.
      </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
      <div class="invalid-feedback">
        Please enter a valid email.
      </div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control" required>
      <div class="invalid-feedback">
        Please enter your password.
      </div>
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
      <div class="invalid-feedback">
        Please confirm your password.
      </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Register</button>
  </form>

  <p class="mt-3 text-center">
    Already have an account? <a href="{{ route('login') }}">Login here</a>
  </p>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: Form validation script -->
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

</body>
</html>
