<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #ph {
        width: 60%; /* Make the input field 100% width within the form */
        font-size: 16px; /* Adjust font size as needed */
        padding: 10px; /* Adjust padding as needed */
        margin-bottom: 10px; /* Add some space between input and button */
    }

    #mybutton {
        width: 30%; /* Make the button 100% width within the form */
        font-size: 18px; /* Adjust font size as needed */
        padding: 12px; /* Adjust padding as needed */
    }
        form {
            margin-bottom: 20px;
        box-sizing: border-box;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-inline:auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .wrapper{
            width:80%;
            margin-inline:auto;
        }
        .formWrapper{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">
    <div class="formWrapper">
        <input type="text" id="ph" name="ph" placeholder="Your Registered Number">
        <button type="submit" id="mybutton" class="mysubmit" name="submit">Search</button>
    </div>

    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");
    // Retrieve user input
    $phoneNumber = $_POST['ph'];

    $sql = "SELECT * FROM members WHERE contact='$phoneNumber'";
    $resultSet = mysqli_query($connect, $sql); // execute query
    if ($resultSet) {
        echo "<table border='1'>";

        while ($row = mysqli_fetch_assoc($resultSet)) {
            foreach ($row as $key => $value) {
                
                if ($key === 'Approve') {
                    // Show 'Paid' if Approve is 1, else show 'Not paid'
                    echo "<tr>";
                    echo "<td><strong>$key</strong></td>";
                    echo "<td>" . ($value == 1 ? 'Paid' : 'Not paid') . "</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo "<td><strong>$key</strong></td>";
                    echo "<td>$value</td>";
                    echo "</tr>";
                }
            }
        }

        echo "</table>";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>

    </div>
</body>
</html>
