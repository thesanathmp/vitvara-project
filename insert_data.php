<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final_login";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $schoolName = $_POST["schoolName"];
    $atlCode = $_POST["atlCode"];
    $dashboardPassword = $_POST["dashboardPassword"];
    $gemCode = $_POST["gemCode"];
    $gemPassword = $_POST["gemPassword"];
    $govtEmail = $_POST["govtEmail"];
    $govtEmailPassword = $_POST["govtEmailPassword"];
    $sanctionNumber = $_POST["sanctionNumber"];
    $udise = $_POST["udise"];
    $pfms = $_POST["pfms"];
    $pfmsPassword = $_POST["pfmsPassword"];
    $pfmsOp = $_POST["pfmsOp"];
    $opPassword = $_POST["opPassword"];
    $principalName = $_POST["principalName"];
    $principalPhone = $_POST["principalPhone"];
    $atlIncharge = $_POST["atlIncharge"];
    $atlInchargePhone = $_POST["atlInchargePhone"];
    $regEmail = $_POST["regEmail"];
    $regPhone = $_POST["regPhone"];
    $bharatkosh = $_POST["bharatkosh"];
    $bkoshpswd = $_POST["bkoshpswd"];
    $fundDate = $_POST["fundDate"];


    // Perform SQL INSERT query
    $insertQuery = "INSERT INTO users (schoolName,atlCode,dashboardPassword,
    gemCode,gemPassword,govtEmail,govtEmailPassword,sanctionNumber,udise,pfms,pfmsPassword,pfmsOp,opPassword,principalName,principalPhone,atlIncharge,atlInchargePhone,regEmail,regPhone,bharatkosh,bkoshpswd,fundDate)
    VALUES ('$schoolName','$atlCode','$dashboardPassword',
    '$gemCode','$gemPassword','$govtEmail','$govtEmailPassword','$sanctionNumber','$udise','$pfms','$pfmsPassword','$pfmsOp','$opPassword','$principalName','$principalPhone','$atlIncharge','$atlInchargePhone','$regEmail','$regPhone','$bharatkosh','$bkoshpswd','$fundDate')";
    
    if ($connection->query($insertQuery) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $connection->error;
    }
}

$connection->close();
?>
