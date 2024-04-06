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



// Fetch values from login form
$username = ($_POST['username']);
$password = ($_POST['password']);

if(isset($_POST['username'])&& isset($_POST['password'])){
// Retrieve user data from database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();

    print_r($row);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        // Redirect to profile page or any other authenticated page
        header('Location: main.html');
        exit();
    } else {
        echo "Invalid username or password";
    }
} else {
    echo "User not found";
}
}
else{
    echo "<script>alert('Invalid credentials');</script>";
}
$conn->close();
?>
