<?php 
include 'connection.php';

$id=$_GET['id'];

$query=  "SELECT * FROM members where id='$id'";
$data= mysqli_query($connect, $query); 
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Register</title>
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
    <form action="" class="form" method="post">
        <div class="input-box">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter full name"
                value="<?php echo $result['fullname'];?>"/>
        
        </div>

         <div class="input-box">
                <label for="contact">Contact</label>
                <input type="number" id="contact" name="contact" placeholder="Enter your number"
                value="<?php echo $result['contact'];?>"/>
            </div>

            <div class="input-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="xyz@gmail.com"
                value="<?php echo $result['email'];?>"/>
            </div>

            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create password"
                value="<?php echo $result['password'];?>"/>
            </div>

            <div class="input-box">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address"
                value="<?php echo $result['address'];?>"/>
            </div>
            
            <div class="input-box">
                <label for="Date">Date Of Join</label> <span class="text-danger" id="doj"><b></b></span>
                <input type="date" id="date" name="join_date"
                value="<?php echo $result['join_date'];?>"/>
            </div>

            <!-- <div class="column">
            <div class="input-box" required>
                <label for="plan">Plan</label><br>
            <select  id = "items" name="plan" class="select" onchange="myFunction()"
            value="<?php echo $result['plan'];?>">
        <option value="">Select Option</option>
        <option value="1month">1 month</option>
        <option value="3month">3 month</option>
        <option value="6month">6 month</option>
        <option value="1year">1 year</option>

            </select>
            
                
            </div>

            <div class="input-box">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" readonly/>
            </div>
        </div> -->
         
        <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
                <div class="gender">
                <?php
                    if($result['gender']==='MALE'){  ?>
                        <input type="radio" name="gender" id="male" value="male" checked>
                    <lable for="male">Male</lable>
                    <input type="radio" name="gender" id="female" value="female">
                    <lable for="female">female</lable>
                    <input type="radio" name="gender" id="other" value="other">
                    <lable for="other">Other</lable>
                    <?php
                    }else if($result['gender']==='female'){ ?>
                    <input type="radio" name="gender" id="male" value="male">
                    <lable for="male">Male</lable>
                    <input type="radio" name="gender" id="female" value="female" checked>
                    <lable for="female">female</lable>
                    <input type="radio" name="gender" id="other" value="other">
                    <lable for="other">Other</lable>
                    <?php
                    }else { ?>
                    <input type="radio" name="gender" id="male" value="male">
                    <lable for="male">Male</lable>
                    <input type="radio" name="gender" id="female" value="female">
                    <lable for="female">female</lable>
                    <input type="radio" name="gender" id="other" value="other" checked>
                    <lable for="other">Other</lable>
                 <?php   } ?>
                </div>
            </div>
        <button type="submit" id="mybutton" class="mysubmit" name="mybutton">Update</button>
      </form>
</div>
<!-- <script src="script.js"></script> -->
</body>
</html>

<?php
if (isset($_POST['mybutton'])){
    $fname=$_POST['fullname'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $address=$_POST['address'];
    $date=$_POST['join_date'];
    // $pln=$_POST['plan'];
    $gender=$_POST['gender'];

    $query="UPDATE members SET fullname='$fname',contact='$contact',email='$email',password='$pwd',address='$address',join_date='$date',plan='$pln',gender='$gender'
    where id='$id'";
    if(mysqli_query($connect,$query)){
        echo "data update";?>
        <script>
        window.location="http://localhost/Gym/display.php","_self";
        </script>
        <?php
    }else{
        echo "data donot update";
    }
}