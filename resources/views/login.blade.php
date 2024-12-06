<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        <form action="#" method="POST">
            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Email"
                    required
                />
            </div>
            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Password"
                    required
                />
            </div>
            <!-- Role Dropdown -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <!-- Submit Button & Forgot Password -->
            <div class="flex justify-between items-center mb-4">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
                <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot Password?</a>
            </div>
        </form>
        <!-- Sign Up Link -->
        <p class="text-center text-sm text-gray-600">
            Don't have an account? <a href="/signup" class="text-indigo-600 hover:underline">Sign Up</a>
        </p>
    </div>
</body>
</html>