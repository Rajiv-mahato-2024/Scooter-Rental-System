<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "scooter_rental_system"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "Please log in to make a booking.";
    exit;
}



// Sanitize input function
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Handle booking form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_scooter'])) {
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $contactNo = sanitizeInput($_POST['contact']);
    $scooterType = sanitizeInput($_POST['scooterType']);
    $pricing = sanitizeInput($_POST['pricing']);
    $pickupLocation = sanitizeInput($_POST['pickup_location']);
    $bookingDate = sanitizeInput($_POST['date']);
    $noOfDays = (int)sanitizeInput($_POST['num']);
    $pickupTime = sanitizeInput($_POST['time']);
    $userId = $_SESSION['user_id'];

    // Calculate total price
    $priceNumeric = preg_replace('/[^\d]/', '', $pricing); // Remove non-numeric characters from pricing
    $totalPrice = $priceNumeric * $noOfDays;

    // Validate inputs
    if (empty($name) || empty($email) || empty($contactNo) || empty($scooterType) || empty($pricing) || empty($pickupLocation) || empty($bookingDate) || empty($noOfDays) || empty($pickupTime)) {
        echo "All fields are required.";
        exit;
    }

    // Insert booking into the database
    $sql = "INSERT INTO booking (name, email, contact_no, scooter_type, pricing, total_price, pickup_location, booking_date, no_of_days, pickup_time, user_Id) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssisi", $name, $email, $contactNo, $scooterType, $pricing, $totalPrice, $pickupLocation, $bookingDate, $noOfDays, $pickupTime, $userId);

    if ($stmt->execute()) {
        echo "<div class='success'>Booking successful! Total price: ₹" . $totalPrice . ". Thank you for choosing Easy Ride.</div>";
        // Redirect after successful booking
        echo "<script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
