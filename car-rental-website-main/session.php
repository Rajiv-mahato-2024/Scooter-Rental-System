<?php
session_start();
header('Content-Type: application/json');
echo json_encode([
    'isLoggedIn' => isset($_SESSION['user_id']),
    'username' => $_SESSION['username'] ?? null,
]);
?>