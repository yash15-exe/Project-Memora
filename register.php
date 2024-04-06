
<?php
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Memora"; 
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo "<script>alert('Server failed');</script>";
}

// Fetch values from registration form
if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful');</script>";
   
    echo "<script>setTimeout(function() { window.location.href = 'login.html'; }, 1000);</script>";
} else {
    echo "<script>alert('Registration failed, Please try again');</script>";
}
}

$conn->close();
?>

