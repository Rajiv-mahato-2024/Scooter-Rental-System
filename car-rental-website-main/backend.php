<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "scooter_rental_system";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Handle user registration
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = sanitizeInput($_POST['username']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);

    // Validate inputs
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Check if the username or email already exists
    $checkQuery = "SELECT id FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo "Username or email already exists.";
        $stmt->close();
        exit;
    }
    $stmt->close();

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert into database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Handle user login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Validate inputs
    if (empty($username) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Check user in database
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($userId, $storedUsername, $hashedPassword);

    if ($stmt->fetch() && password_verify($password, $hashedPassword)) {
        session_start();
        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $storedUsername;
        header("Location: index.php?msg=logged in");
        exit;
    } else {
        echo "Invalid username or password.";
    }
    $stmt->close();
}

// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact'])) {
    $name = sanitizeInput($_POST['name']);
    $phone = sanitizeInput($_POST['phone']);
    $email = sanitizeInput($_POST['email']);
    $message = sanitizeInput($_POST['message']);

    // Validate inputs
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Insert into the contact_us table
    $sql = "INSERT INTO contact_us (name, phone, email, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $phone, $email, $message);



    

    if ($stmt->execute()) {
// Assuming the contact form was submitted successfully
echo "<div class='thank-you-message'>Thank you for contacting us!</div>";
// Redirect after 3 seconds
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
