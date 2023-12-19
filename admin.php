<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $tasknumber = $_POST["tasknumber"];
    $employee = $_POST["employee"];
    $tasks = $_POST["tasks"];
    $status = $_POST["status"];
    $priority = $_POST["priority"];

    // Insert the login information into the database
    $sql = "INSERT INTO register (tasknumber, employee, tasks, status, priority) 
            VALUES ('$tasknumber', '$employee', '$tasks', '$status', '$priority')"; // Fixed the typo

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    } else {
        echo "Record inserted successfully!";
    }
}

// Close the database connection
$conn->close();
?>
