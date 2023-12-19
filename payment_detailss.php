<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final_login";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$user_id = $_SESSION["user_id"];
$atlCode = $_SESSION["ATL_CODE"]; // Assuming you're storing ATL_CODE in the session

// Fetch previous payment history
$sql_payment_history = "SELECT * FROM payment_details WHERE ATL_CODE = '$atlCode'";
$result_payment_history = $connection->query($sql_payment_history);

$payment_history = [];
if ($result_payment_history->num_rows > 0) {
    while ($row = $result_payment_history->fetch_assoc()) {
        $payment_history[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
/* Style for the Previous Payment History section */
h2 {
    text-align: center;
    font-size: 24px;
    margin-top: 20px;
    color: #004080;
}

.input-box {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 15px;
    background-color: #f7f7f7;
}

.input-box label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.input-box p {
    margin: 0;
    padding: 5px 0;
}

.input-box a {
    text-decoration: none;
    color: #004080;
}

.input-box a:hover {
    color: #002266;
}

.anchor-links-container {
    text-align: center;
    margin-top: 20px;
}

.anchor-links-container a {
    display: block;
    text-decoration: none;
    color: #004080;
    font-weight: bold;
    margin-top: 10px; /* Add some vertical spacing between the anchor links */
}

.anchor-links-container a:hover {
    color: #002266;
}

</style>
</head>
<body>
    <h2>Previous Payment History</h2>
    <?php
   if (!empty($payment_history)) {
        foreach ($payment_history as $payment) {
            echo "<div class='input-box'>";
            
            echo "<label for='Pay_catg'><b>Payment Category</b></label>";
            echo "<p>" . $payment["pay_catg"] . "</p>";
            
            echo "<label for='Pay_slab'><b>Payment Slab</b></label>";
            echo "<p>" . $payment["pay_slab"] . "</p>";

            echo "<label for='Date'><b>Date</b></label>";
            echo "<p>" . $payment["date"] . "</p>";

            echo "<label for='Amount'><b>Amount</b></label>";
            echo "<p>" . $payment["amount"] . "</p>";

            echo "<label for='Comment'><b>Comment</b></label>";
            echo "<p>" . $payment["comment"] . "</p>";

            echo "<label for='File'><b>File</b></label>";
            echo "<p><a href='" . $payment["file"] . "'>View File</a></p>";

            echo "<label for='Vendor'><b>Vendor</b></label>";
            echo "<p>" . $payment["vendor"] . "</p>";

            echo "<label for='Pay_type'><b>Payment Type</b></label>";
            echo "<p>" . $payment["pay_type"] . "</p>";

            echo "<label for='Ref_no'><b>Reference No.</b></label>";
            echo "<p>" . $payment["ref_no"] . "</p>";

            echo "<label for='PFMS'><b>PFMS</b></label>";
            echo "<p>" . $payment["pfms"] . "</p>";

            echo "</div>";
        }
    } else {
        echo "No previous payment history found.";
    }
    ?>



</body>
</html>
