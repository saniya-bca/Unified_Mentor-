<?php
include 'config.php'; // database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $message    = $_POST['message'];

    // Prepared statement (safe from SQL injection)
    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Thank you for your message! We will get back to you soon.'); window.location.href='home.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
