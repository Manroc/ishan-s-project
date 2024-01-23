<!-- <?php
session_start();

// Check if the user is not logged in
if(!isset($_SESSION['uname'])) {
    header("Location: admin.php");

}

echo "<h1>Welcome Admin </h1>";
echo "<a href= 'display.php'>Display</a><br><br>";
// Logout button
echo "<form method='post' action='logout.php'>";
echo "<button type='submit' name='logout' style='background-color: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;'>Logout</button>";
echo "</form>";


echo "<style>
        h1 {
            color: blue;
            text-align: center;
        }
      </style>";

?>
 
 
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
        }

        header, footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
            width: 100%;
        }

        nav {
            background-color: #555;
            color: #fff;
            padding: 1em;
            text-align: center;
            width: 200px;
        }

        main {
            padding: 1em;
            flex-grow: 1;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        <h1>Gym Dashboard</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Classes</a>
        <a href="#">Membership</a>
        <a href="#">Schedule</a>
    </nav>

    <main>
        <section>
            <h2>Member Management</h2>
            <!-- Member management content goes here -->
        </section>

        <section>
            <h2>Class Schedule</h2>
            <!-- Class schedule content goes here -->
        </section>

        <section>
            <h2>Fitness Metrics</h2>
            <!-- Fitness metrics content goes here -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Gym Dashboard</p>
    </footer>

</body>
</html>


