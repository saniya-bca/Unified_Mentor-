<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Example: hardcoded admin OR you can make separate "admins" table
    if ($email === "admin@fitpro.com" && $password === "admin123") {
        $_SESSION['admin'] = true;
        echo "<script>alert('Admin login successful!'); window.location.href='admin_dashboard.php';</script>";
        exit;
    } else {
        echo "<script>alert('Invalid admin credentials!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - FitPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Admin Login</h2>
        
        <form method="POST" class="space-y-4">
            <div>
                <label class="block mb-1 text-gray-600">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg">
            </div>
            <div>
                <label class="block mb-1 text-gray-600">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg">
            </div>
            
            <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded-lg hover:bg-gray-900">
                Login
            </button>
        </form>
    </div>
</body>
</html>
