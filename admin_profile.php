<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .table-container {
            width: 100%;
            overflow-x: auto; /* Enable horizontal scrolling if needed */
            margin-top: 60px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
            top: 50px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: black;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .task{
            position: fixed;
            top: 10px;
            right: 20px;
            z-index: 1;
        }
        .task input {
            font-size: 16px; /* Increase the font size */
            padding: 10px 20px; /* Increase padding for larger button */
        }
        
    </style>
</head>

<body>
    <div class="task">
        <input type="button" value="Task" name="task" onclick="redirectToPage()">
    </div>
<div class="table-container">
    <table align="center" border="3" cellspacing="7" style="width:100%; float:center; ">
        <tr style="background-color:black; color:white;">
            <th>ID</th>
            <th>SCHOOL_NAME</th>
            <th>ATL_CODE</th>
            <th>DASHBRD_PSWD</th>
            <th>GEM_CODE</th>
            <th>GEM_PSWD</th>
            <th>Govt_Email</th>
            <th>Govt_Mail_PSWD</th>
            <th>Sanction_no</th>
            <th>UDISE</th>
            <th>PFMS</th>
            <th>PFMS_PSWD</th>
            <th>PFMS_OP</th>
            <th>OP_PASS</th>
            <th>Principle_Name</th>
            <th>Principal_Phone</th>
            <th>ATL_In</th>
            <th>ATL_Phone</th>
            <th>Reg_Email</th>
            <th>Reg_Phone</th>
            <th>Bharathkosh</th>
            <th>BkoshPswd</th>
            <th>Fund_date</th>
            <th>Payment </th>
        </tr>

        <?php
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "final_login";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = "SELECT * FROM users";
        $data = $connection->query($query);

        if ($data->num_rows > 0) {
            while ($result = $data->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['schoolName'] . "</td>
                    <td>" . $result['atlCode'] . "</td>
                    <td>" . (isset($result['dashboardPassword']) ? $result['dashboardPassword'] : "") . "</td>
                    <td>" . (isset($result['gemCode']) ? $result['gemCode'] : "") . "</td>
                    <td>" . (isset($result['gemPassword']) ? $result['gemPassword'] : "") . "</td>
                    <td>" . (isset($result['govtEmail']) ? $result['govtEmail'] : "") . "</td>
                    <td>" . (isset($result['govtEmailPassword']) ? $result['govtEmailPassword'] : "") . "</td>
                    <td>" . (isset($result['sanctionNumber']) ? $result['sanctionNumber'] : "") . "</td>
                    <td>" . (isset($result['udise']) ? $result['udise'] : "") . "</td>
                    <td>" . (isset($result['pfms']) ? $result['pfms'] : "") . "</td>
                    <td>" . (isset($result['pfmsPassword']) ? $result['pfmsPassword'] : "") . "</td>
                    <td>" . (isset($result['pfmsOp']) ? $result['pfmsOp'] : "") . "</td>
                    <td>" . (isset($result['opPassword']) ? $result['opPassword'] : "") . "</td>
                    <td>" . (isset($result['principalName']) ? $result['principalName'] : "") . "</td>
                    <td>" . (isset($result['principalPhone']) ? $result['principalPhone'] : "") . "</td>
                    <td>" . (isset($result['atlIncharge']) ? $result['atlIncharge'] : "") . "</td>
                    <td>" . (isset($result['atlInchargePhone']) ? $result['atlInchargePhone'] : "") . "</td>
                    <td>" . (isset($result['regEmail']) ? $result['regEmail'] : "") . "</td>
                    <td>" . (isset($result['regPhone']) ? $result['regPhone'] : "") . "</td>
                    <td>" . (isset($result['bharatkosh']) ? $result['bharatkosh'] : "") . "</td>
                    <td>" . (isset($result['bkoshpswd']) ? $result['bkoshpswd'] : "") . "</td>
                    <td>" . (isset($result['fundDate']) ? $result['fundDate'] : "") . "</td>
                    <td><button type=\"button\" onclick=\"makePayment('" . $result['atlCode'] . "')\">Make Payment</button></td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='28' style='text-align: center;'>No records found</td></tr>";
        }

        $connection->close();
        ?>
    </table>
</div>
<script>
        function redirectToPage() {
            window.location.href = 'http://localhost/vit/admin.html'; // Replace with your target page URL
        }
        function makePayment(atlCode) {
        // Redirect to another page for payment processing
        window.location.href = 'http://localhost/vit/payment.php'; 
    }
    </script>
</body>

</html>
