<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white h-screen flex items-center justify-center">

    <!-- Form Container -->
    <div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-md">

        <!-- Form Heading -->
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Sign Up</h2>

        <!-- Form -->
        <form action="#" method="POST">
            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name"
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Email Address"
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="********"
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-medium mb-2">Role</label>
                <select
                    id="role"
                    name="role"
                    class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring focus:ring-blue-200"
                >
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Sign Up Button -->
            <button type="submit" class="bg-green-600 text-white px-2 py-2 rounded-lg hover:bg-green-700 transition">Sign Up</button>
        </form>

        <!-- Sign In Link -->
        <div class="text-center mt-4">
            <p class="text-sm text-gray-600">Already have an account? 
                <a href="/" class="text-blue-600 hover:underline">Login</a>
            </p>
        </div>
    </div>
    
</body>
</html>
