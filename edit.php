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
    echo "<script>alert('Server Issue');</script>";
    echo "<script>setTimeout(function() { window.location.href = 'index.html'; }, 1000);</script>";
}

// Fetch values from form (assuming you have form inputs for email and phone)
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_SESSION['username']; // Assuming you're updating the current user's info

// Update user data in the database
$sql = "UPDATE users SET email=?, phone=? WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $phone, $username);

if ($stmt->execute()) {
    
    echo '<script>alert("User information updated successfully");</script>';
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;

    header("Location:main.html");
} else {
    echo '<script>alert("Failed to update user information");</script>';
    header("Location:editprofile.php");
}

$stmt->close();
$conn->close();
?>
