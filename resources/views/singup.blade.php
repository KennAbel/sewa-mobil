<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <!-- Form Container -->
    <div class="bg-white p-4 rounded shadow w-100" style="max-width: 400px;">

        <!-- Form Heading -->
        <h2 class="text-center mb-4">Sign Up</h2>

        <!-- Form -->
        <form action="#" method="POST">
            <!-- Full Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Full Name" 
                    class="form-control"
                    required
                />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Email Address" 
                    class="form-control"
                    required
                />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="********" 
                    class="form-control"
                    required
                />
            </div>

            <!-- Role -->
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select id="role" name="role" class="form-select" required>
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Sign Up Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Sign Up</button>
            </div>
        </form>

        <!-- Sign In Link -->
        <div class="text-center mt-3">
            <p class="text-muted">Already have an account? 
                <a href="/" class="text-decoration-none">Login</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
