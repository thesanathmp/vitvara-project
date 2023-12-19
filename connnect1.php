<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vit1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
move_uploaded_file($tempname,$folder);


    $email = $_POST["email"];
    $school = $_POST["school"];
    $date = $_POST["date"];
    $fromhour = $_POST["fromhour"];
    $fromminute = $_POST["fromminute"];
    $tohour = $_POST["tohour"]; // Get the hour value separately
    $tominute = $_POST["tominute"]; // Get the minute value separately
    $students = $_POST["students"];
    $classdetails = $_POST["classdetails"];
    $trainers = $_POST["trainers"];
    $expense = $_POST["expense"];
    $expensedetails = $_POST["expensedetails"];
    $comments = $_POST["comments"];
    $requirements = $_POST["requirements"];
    $image = $_FILES["uploadfile"]["name"];


    // Concatenate the hour and minute values for fromtime and totime
    $fromtime = $fromhour . ":" . $fromminute;
    $totime = $tohour . ":" . $tominute;

    // Insert the login information into the database
    $sql = "INSERT INTO register (email, school, date, fromtime, totime, students, classdetails, trainers, expense, expensedetails, comments, requirements, image) 
            VALUES ('$email', '$school', '$date', '$fromtime', '$totime', '$students', '$classdetails', '$trainers', '$expense', '$expensedetails', '$comments', '$requirements', '$folder')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    } else {
        include('display.php');
    }
}

// Close the database connection
$conn->close();

?>
