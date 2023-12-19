<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vit1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "register" table
$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);

// Check if there are any records in the result
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Email: " . $row["email"] . "<br>";
        echo "School: " . $row["school"] . "<br>";
        echo "Date: " . $row["date"] . "<br>";
        echo "From Time: " . $row["fromtime"] . "<br>";
        echo "To Time: " . $row["totime"] . "<br>";
        echo "Students: " . $row["students"] . "<br>";
        echo "Class Details: " . $row["classdetails"] . "<br>";
        echo "Trainers: " . $row["trainers"] . "<br>";
        echo "Expense: " . $row["expense"] . "<br>";
        echo "Expense Details: " . $row["expensedetails"] . "<br>";
        echo "Comments: " . $row["comments"] . "<br>";
        echo "Requirements: " . $row["requirements"] . "<br>";
        echo "Image: <img src='" . $row["image"] . "' height='100px' width='100px'> <br>";
        echo "<hr>"; // Add a horizontal line to separate each record
    }
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
