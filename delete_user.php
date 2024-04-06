<?php
// Database connection
$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "Memora"; 
$conn = new mysqli($servername, $username, $password, $database);
session_start();

// Check connection
if ($conn->connect_error) {
    echo "Server Issue: " . $conn->connect_error;
    exit();
}

// Assuming you want to delete the currently logged-in user
$username = $_SESSION['username'];

// SQL query to delete user
$sql = "DELETE FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);

if ($stmt->execute()) {
    echo "User deleted successfully";
    session_destroy();
    
   
} else {
    echo "Error deleting user: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
