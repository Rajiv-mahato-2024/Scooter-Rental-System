<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "scooter_rental_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session to retrieve logged-in user's details
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "You need to log in to view this page.";
    header("Location: login.php");
    exit;
}

// Retrieve user details
$userId = $_SESSION['user_id'];
$userQuery = "SELECT username, email FROM users WHERE id = ?";
$userStmt = $conn->prepare($userQuery);
$userStmt->bind_param("i", $userId);
$userStmt->execute();
$userStmt->bind_result($username, $email);
$userStmt->fetch();
$userStmt->close();

// Retrieve user bookings
$bookingQuery = "SELECT scooter_type, pricing, total_price, pickup_location, booking_date, no_of_days, pickup_time FROM booking WHERE user_Id = ?";
$bookingStmt = $conn->prepare($bookingQuery);
$bookingStmt->bind_param("i", $userId);
$bookingStmt->execute();
$bookingResult = $bookingStmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            text-align: center;
            color: #0043ff8c;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #0043ff8c;
            color: white;
        }
        .user-info {
            margin-bottom: 20px;
            text-align: center;
        }
        .btn {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .btn a {
            text-decoration: none;
            color: white;
            background-color: #0043ff8c;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn a:hover {
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>My Bookings</h2>
        <div class="user-info">
            <h3>Welcome, <?php echo htmlspecialchars($username); ?>!</h3>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
        </div>
        <table>
            <tr>
                <th>Scooter Type</th>
                <th>Pricing (₹)</th>
                <th>Total Price (₹)</th>
                <th>Pickup Location</th>
                <th>Booking Date</th>
                <th>No. of Days</th>
                <th>Pickup Time</th>
            </tr>
            <?php while ($row = $bookingResult->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['scooter_type']); ?></td>
                    <td><?php echo htmlspecialchars($row['pricing']); ?></td>
                    <td><?php echo htmlspecialchars($row['total_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['pickup_location']); ?></td>
                    <td><?php echo htmlspecialchars($row['booking_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['no_of_days']); ?></td>
                    <td><?php echo htmlspecialchars($row['pickup_time']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <div class="btn">
            <a href="index.php">Go Back to Home</a>
        </div>
    </div>
</body>
</html>

<?php
$bookingStmt->close();
$conn->close();
?>
