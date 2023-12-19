<!DOCTYPE html>
<html>
<head>
    <title>Registration Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }
    </style>    
</head>
<body>
    <h1>Registration Users</h1>
    <table border="1">
        <tr>
            <th>email</th>
            <th>school</th>
            <th>date</th>
            <th>fromtime</th>
            <th>totime</th>
            <th>students</th>
            <th>classdetails</th>
            <th>trainers</th>
            <th>expense</th>
            <th>expensedetails</th>
            <th>comments</th>
            <th>requirements</th>
            <th>image</th>
        </tr>
        
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'vit1');

        // Check connection
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }

        // SQL query to retrieve data
        $sql = "SELECT * FROM register";
        

        // Execute the query
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Loop through the rows and fetch data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["school"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["fromtime"] . "</td>";
                echo "<td>" . $row["totime"] . "</td>";
                echo "<td>" . $row["students"] . "</td>";
                echo "<td>" . $row["classdetails"] . "</td>";
                echo "<td>" . $row["trainers"] . "</td>";
                echo "<td>" . $row["expense"] . "</td>";
                echo "<td>" . $row["expensedetails"] . "</td>";
                echo "<td>" . $row["comments"] . "</td>";
                echo "<td>" . $row["requirements"] . "</td>";
                echo "<td><img src='" . $row["image"] . "' width='100'></td>"; // Display image
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='15'>No data found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
