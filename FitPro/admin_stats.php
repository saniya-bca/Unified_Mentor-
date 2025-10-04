<?php
include "config.php";

// Users
$res1 = $conn->query("SELECT COUNT(*) as total_users FROM users");
$total_users = $res1->fetch_assoc()['total_users'];

// Bookings
$res2 = $conn->query("SELECT COUNT(*) as total_bookings FROM bookings");
$total_bookings = $res2->fetch_assoc()['total_bookings'];

// Payments
$res3 = $conn->query("SELECT SUM(amount) as revenue FROM payments WHERE status='success'");
$revenue = $res3->fetch_assoc()['revenue'] ?? 0;

echo "Users: $total_users <br> Bookings: $total_bookings <br> Revenue: ₹$revenue";
?>
