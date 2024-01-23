<?php
session_start();
if(!$_SESSION["uname"] == "admin") {
    echo '<script>alert("WE ARE INSIDE");</script>';
    header("Location: login.php");
    exit; // It's good practice to exit after a header redirect
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }

        header {
            background-color: lightslategray;
            padding: 15px;
            text-align: center;
            color: white;
            font-size: 36px;
            margin-bottom: 30px;
        }
        header img {
            width: 50px; /* Adjust the width as needed */
            height: 50px; /* Adjust the height as needed */
            margin-right: 10px;
        }

        main {
            display: flex;
            align-items: flex-start;
        }

        nav {
            background-color: lightslategray;
            padding: 90px;
            border-radius: 010px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 39rem;
            width: 100px;
            margin-right: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 20px 0;
            display: block;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #bec9d3;
        }

        section {
            flex: 1;
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin-bottom: 10px;
            color: #007bff;
        }

        .card p {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .logout-link {
            color: #dc3545;
            cursor: pointer;
            margin-top: 20px;
            display: block;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
    <title>Admin Dashboard</title>
</head>
<body>

    <header>
    <img src="images/aa.png" alt="Logo">
    <h2 style="color: white;font-weight: bold; text-align: center;">Welcome Admin</h2>

    </header>

    <main>
        <nav class="d-none d-md-block">
            <a href="#dashboard-container">Dashboard</a>
            <a href="membersList.php">Members</a>
            <a href="#">Packages</a>
            <a href="#">Payments</a>
            <a href="dash.php" onclick="logout()">Logout</a>
        </nav>

        <section>
            <div class="dashboard-container">
                <div class="card">
                    <h2>Total Members</h2>
                    <!-- <p>150</p> -->
                    <a href="" class="btn btn-primary">View Details</a>
                </div>
                <div class="card">
                    <h2>Packages</h2>
                    <!-- <p>20</p> -->
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
                <div class="card">
                    <h2>Total Revenue</h2>
                    <!-- <p>$15,000</p> -->
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </section>

    </main>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function logout() {
            // Add your logout logic here
            alert("Logout clicked!");
        }
    </script>
</body>
</html>
