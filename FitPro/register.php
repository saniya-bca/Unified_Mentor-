<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, phone, password_hash) 
            VALUES ('$name', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful! Please login.'); window.location.href='login.php';</script>";
        exit;
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - FitPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- ✅ Navbar (same as home.php) -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-purple-700">FitPro</div>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="home.php" class="text-gray-700 hover:text-purple-600">Home</a>
                    <a href="#features" class="text-gray-700 hover:text-purple-600">Features</a>
                    <a href="#membership" class="text-gray-700 hover:text-purple-600">Membership</a>
                    <a href="#classes" class="text-gray-700 hover:text-purple-600">Classes</a>
                    <a href="#trainers" class="text-gray-700 hover:text-purple-600">Trainers</a>
                    <a href="contact.php" class="text-gray-700 hover:text-purple-600">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="login.php" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                        Member Login
                    </a>
                    <a href="admin_login.php" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900 transition-colors">
                        Admin Portal
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ✅ Page Content (with top padding for navbar space) -->
    <div class="flex items-center justify-center min-h-screen pt-20">
        <div class="bg-white p-8 rounded-xl shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-purple-700">Member Registration</h2>
            
            <form method="POST" class="space-y-4">
                <div>
                    <label class="block mb-1 text-gray-600">Full Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-1 text-gray-600">Email</label>
                    <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-1 text-gray-600">Phone</label>
                    <input type="text" name="phone" required class="w-full px-4 py-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-1 text-gray-600">Password</label>
                    <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg">
                </div>
                
                <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700">
                    Register
                </button>
            </form>

            <p class="text-center text-sm mt-4">Already have an account? 
                <a href="login.php" class="text-purple-600 hover:underline">Login</a>
            </p>
        </div>
    </div>

</body>
</html>
