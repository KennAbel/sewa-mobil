<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Form Container -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm">

        <!-- Form Heading -->
        <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>

        <!-- Form -->
        <form action="#" method="POST">
            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Full Name" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Email Address" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="********" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                />
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Sign Up Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Sign Up</button>
            </div>
        </form>

        <!-- Sign In Link -->
        <div class="text-center mt-4">
            <p class="text-sm text-gray-600">Already have an account? 
                <a href="/" class="text-indigo-600 hover:underline">Login</a>
            </p>
        </div>
    </div>
</body>
</html>