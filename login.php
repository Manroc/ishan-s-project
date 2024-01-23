<?php
session_start();

// if admin is logged in directly redirect to admin dashboard
if(isset($_SESSION["uname"]) && $_SESSION["uname"] == "admin") {
    echo '<script>alert("WE ARE INSIDE");</script>';
    header("Location: Adash.php");
    exit; // It's good practice to exit after a header redirect
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = "admin";
    $pwd = "Theironparadise";

    // Retrieve user input
    $input_uname = $_POST['uname'];
    $input_pwd = $_POST['pwd'];

    // Check if credentials are correct
    if($input_uname == $uname && $input_pwd == $pwd) {
        $_SESSION['uname'] = $uname;
        header("Location: Adash.php");
        exit;
    } else {
        echo '<script> alert("Username or Password incorrect!") </script>';  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-image: url(images/addmin.jpg);
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.form{
    width: 350px;
    height: 300px;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    padding: 10px;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px black;
}

.form h3{
    font-family: sans-serif;
    font-size: 26px;
    font-weight: 380;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}

.form .login{
    display: flex;
    flex-direction: column;
    width: 100%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    justify-content: center;
    align-items: center;
}

.login input{
    background-color: #fff;
    font-family: sans-serif;
    letter-spacing: 1px;
}

.login input,button{
    margin: 10px;
    padding: 10px 15px;
    border: none;
    outline: none;
    border-radius: 6px;
    font-size: 17px;
    text-indent: 3px;
}

.login button{
    height: 40px;
    width: 30%;
    color: #fff;
    font-size: 1rem;
    border: none;
    margin-top: 30px;
    border-radius: 6px;
    font-weight: 400;
    transition: all 0.2s ease;
    background: rgb(120, 100, 250);
}

.form button:hover{
    background: rgb(90, 20, 150);
}

a.button-link {
            display: inline-block;
            position: absolute;
            top: 100px;
            left: 100px;
            color: #fff;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            font-weight: 400;
            transition: all 0.2s ease;  
        }

a.button-link:hover{
    background-color:rgb(90, 20, 150) ;
}
 @media (max-width: 470px){
    .form{
        width: 88%;
    }
 }
  

    </style>
</head>
<body>
<a href="dash.php" class="button-link">
        <button>Home</button>
    </a>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off" >
    <div class="form">
        <h3>Admin Log In</h3>
        <div class="login">
            <input type="text" id="name" name="uname" placeholder="Username">
            <input type="password" id="pwd" name="pwd" placeholder="Password">
            <button type="submit" id="mybutton" class="mysubmit" name="submit">Sign In</button>
        </div>
    </div>
</form>
</body>
</html>