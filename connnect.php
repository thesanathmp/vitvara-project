<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Verify user credentials
    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        echo "Login Successful.";
        header("Location: vit1.html"); // Redirect to a dashboard page upon successful login
    } else {
        echo "Invalid credentials.";
    }
}

// Close the database connection
$conn->close();
?>
