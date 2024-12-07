<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="bg-white shadow rounded p-4 p-md-5 w-100" style="max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>
        <!-- Form Login -->
        <form action="/login" method="POST">
    @csrf
    <!-- Email Input -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            class="form-control"
            placeholder="Email"
            required
        />
    </div>
    <!-- Password Input -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            class="form-control"
            placeholder="Passwcord"
            required
        />
    </div>
    <!-- Role Dropdown -->
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select id="role" name="role" class="form-select">
            <option value="customer">Customer</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <!-- Submit Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="#" class="text-decoration-none">Forgot Password?</a>
    </div>
</form>

        <!-- Sign Up Link -->
        <p class="text-center text-muted">
            Don't have an account? 
            <a href="/singup" class="text-primary text-decoration-none">Sign Up</a>
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
