<?php
$conn = new mysqli("localhost:3307", "root", "", "fitpro");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['user_id'];
$class_id = $_GET['class_id'];
$amount = $_GET['amount'];

// Agar booking already na ho to booking insert kare
$sql_booking = "INSERT INTO bookings (user_id, class_id, status) VALUES ('$user_id', '$class_id', 'confirmed')";
if ($conn->query($sql_booking) === TRUE) {
    $booking_id = $conn->insert_id;
} else {
    die("Booking error: " . $conn->error);
}

// Payment process
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $method = $_POST['method'];
    $transaction_id = "TXN" . time(); 
    $status = "success";

    $sql_payment = "INSERT INTO payments (booking_id, amount, method, status, transaction_id) 
                    VALUES ('$booking_id', '$amount', '$method', '$status', '$transaction_id')";

    if ($conn->query($sql_payment) === TRUE) {
        echo "<div style='text-align:center; margin-top:50px;'>
                <h2>✅ Payment Successful!</h2>
                <p>Transaction ID: $transaction_id</p>
                <a href='home.php'>Go Back to Home</a>
              </div>";
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width:500px;">
        <h3 class="text-center mb-3">Complete Your Payment</h3>
        <p><strong>Amount:</strong> ₹<?php echo $amount; ?></p>

        <form method="POST">
            <label for="method">Select Payment Method</label>
            <select name="method" class="form-control mb-3" required>
                <option value="UPI">UPI</option>
                <option value="Card">Card</option>
                <option value="Netbanking">Netbanking</option>
                <option value="Paytm">Paytm</option>
            </select>
            <button type="submit" class="btn btn-success w-100">Pay Now</button>
        </form>
    </div>
</div>
</body>
</html>
