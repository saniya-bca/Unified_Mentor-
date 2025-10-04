<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - FitPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white px-6 py-4 flex justify-between">
        <div class="text-xl font-bold">FitPro Admin</div>
        <a href="logout.php" class="bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700">Logout</a>
    </nav>

    <!-- Dashboard Content -->
    <div class="p-6 grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-700">Users</h2>
            <p class="text-gray-500">Manage members, update or remove users</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-700">Memberships</h2>
            <p class="text-gray-500">View and manage subscriptions</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-700">Payments</h2>
            <p class="text-gray-500">Track all payment records</p>
        </div>
    </div>

</body>
</html>
