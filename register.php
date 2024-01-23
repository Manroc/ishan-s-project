<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Register</title>
    <style>
    .error{
        color: red;
        font-size: 14px;
    }
    </style>
    <!-- <script type="text/javascript">        
     function myFunction(){ 
                    var a=document.getElementById('items').selectedIndex;
                                 if(a>0) {
                          var a_val=document.getElementById('items').options[a].value;  
                        if(a_val=="1month")                 
                        price.value=2500;                
                         else if(a_val=="3month")               
                        price.value=7000;                 
                        else if(a_val=="6month")                
                         price.value=13500;  
                         else if(a_val=="1year")                
                         price.value=28000;}         
                          else{ 
                             alert("please select options") }
                        }    
                         </script> -->
</head>
<body>


    <div class="container">
    <header>Registration</header> 
    <form action="#" class="form" method="post" >
        <div class="input-box">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter full name"/>
                <span id="fname" class="error"></span>
        
        </div>

         <div class="input-box">
                <label for="contact">Contact</label>
                <input type="number" id="contact" name="contact" placeholder="Enter your number"/>
                <span id="cont" class="error"></span>

            </div>

            <div class="input-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="xyz@gmail.com"/>
                <span id="mail" class="error"></span>
                
            </div>

            <!-- <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create password"/>
                <span id="pass" class="error"></span>
                
            </div> -->

            <div class="input-box">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address"/>
                <span id="add" class="error"></span>
            
            </div>
            
            <div class="input-box">
                <label for="Date">Date Of Join</label> <span class="text-danger" id="doj"><b></b></span>
                <input type="date" id="date" name="join_date"/>
                <span id="join" class="error"></span>
            </div>
            <div class="input-box">
                <label for="price">Elite Athlete Price</label> <span class="text-danger" id="price"><b></b></span>
                <input type="text" id="date" value="Rs.5000/month" name="price" readonly />
                <span id="join" class="error"></span>
            </div>

            <!-- <div class="column">
            <div class="input-box" required>
                <label for="plan">Plan</label><br>
            <select  id = "items" name="plan" class="select" onchange="myFunction()">
        <option value="">Select Option</option>
        <option value="1month">1 month</option>
        <option value="3month">3 month</option>
        <option value="6month">6 month</option>
        <option value="1year">1 year</option>
            </select>
             </div> -->
<!-- 
            <div class="input-box">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" readonly/>
                <span id="rice" class="error"></span>
            </div>
        </div> -->
         
        <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check-male" name="gender" value="male">
                    <label for="check-male">Male</label>
                </div>

                <div class="gender">
                    <input type="radio" id="check-female" name="gender" value="female">
                    <label for="check-female">Female</label>
                </div>

                <div class="gender">
                    <input type="radio" id="check-other" name="gender" value="other">
                    <label for="check-other">Other</label>
                </div>
            </div>
            <span id="gen" class="error"></span>
        </div> 
        <button type="submit" id="mybutton" class="mysubmit" name="mybutton">Submit</button>
      </form>
</div>
<script>
        
    function isCharacterOnly(text) {
        let pattern = /^[a-zA-Z -]+$/;  
        return pattern.test(text);
    }

       function isNumericOnly(text){
        let pattern=/^[0-9]+$/;
        return pattern.test(text);
       }
      function validatefullname(name){
        let pattern=/^[a-zA-Z0-9_.]{3,20}$/;
        return pattern.test(name);

     }

     function validatePhone(contact) {
       var pattern = /^\d{10}$/;
     return pattern.test(contact);
    }

    function validateEmail(email) {
      var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return pattern.test(email);
    }

    function validatePassword(password) {
     var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{5,}$/;
      return pattern.test(password);
    }

     function validateAddress(add){
        let pattern=/^[a-zA-Z0-9 ., \/ \-]{4,50}$/;
        return pattern.test(add);

     }

     
    

    function validate() {
        
            var name= document.getElementById('fullname').value;
            var contact= document.getElementById('contact').value;
            var email= document.getElementById('email').value;
            var password= document.getElementById('password').value;
            var add= document.getElementById('address').value;
            var date= document.getElementById('date').value;
            var price= document.getElementById('price').value;
            var genderSelected = false;
    var genderOptions = document.getElementsByName('gender');
    for (var i = 0; i < genderOptions.length; i++) {
        if (genderOptions[i].checked) {
            genderSelected = true;
            break;
        }
    }
            
          
            
        if (name==="") {
            document.getElementById('fname').innerHTML = "Enter your name";
            return false;
        }
        
        if (!isCharacterOnly(name)) {
            document.getElementById('fname').innerHTML ="Name can't contain number and special character";
            return false;
        }
        
        if (name.length <2 || name.length>50) {
            document.getElementById('fname').innerHTML = "Name must be between 2 -50 letters";
            return false;
        }
        else{
            document.getElementById('fname').innerHTML = "";
       
    }

    if(contact===""){
    document.getElementById('cont').innerHTML="Enter your phone number";
        return false;
   }
     if(!validatePhone(contact)){
    document.getElementById('cont').innerHTML="Invalid phone number";
        return false;
   }
   else{
    document.getElementById('cont').innerHTML="";
       
    }

     
    if(email===""){
    document.getElementById('mail').innerHTML="Enter your email";
        return false;
}
if(!validateEmail(email)){
    document.getElementById('mail').innerHTML="Invalid email";
        return false;
}
else{
    document.getElementById('mail').innerHTML="";
     
}

if(password===""){
    document.getElementById('pass').innerHTML="Enter your password";
    return false;
}
if(!validatePassword(password)){
    document.getElementById('pass').innerHTML="Invalid Password"; 
    return false;
}
else{
    document.getElementById('pass').innerHTML=""; 

}
if(add===""){
    document.getElementById('add').innerHTML="Enter your address";
        return false;
}

if(!validateAddress(add)){
    document.getElementById('add').innerHTML="Invalid address";
        return false;
}
else{
    document.getElementById('add').innerHTML=""; 
}

if(date===""){
    document.getElementById('join').innerHTML="Enter date of join";
    return false;
}
else{
    document.getElementById('join').innerHTML=""; 
}

if(price===""){
    document.getElementById('rice').innerHTML="Select plan option";
    return false;
}
else{
    document.getElementById('rice').innerHTML=""; 
}

if (!genderSelected) {
        document.getElementById('gen').innerHTML = "Select your gender";
        return false;
    } else {
        document.getElementById('gen').innerHTML = "";
    }

}
  
    </script>
</body>
</html>
<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $fullname = $_POST["fullname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $join_date = $_POST["join_date"];
    $price = $_POST["price"];
    $gender = $_POST["gender"];
    
    // Validate data (you may want to add more validation)
    // Here, I'm just checking if fields are not empty
    if (empty($fullname) || empty($contact) || empty($email) || empty($password) || empty($address) || empty($join_date) || empty($price) || empty($gender)) {
        echo "All fields are required!";
        exit;
    }

    // You should perform more robust validation and sanitation here before inserting into the database.

    // Database connection (replace with your actual database credentials)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "gym";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO members (fullname, contact, email, password, address, join_date, price, gender) 
            VALUES ('$fullname', '$contact', '$email', '$password', '$address', '$join_date', '$price', '$gender')";

    

    // Close the database connection
    $conn->close();
}

?>