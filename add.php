<?php include 'connection.php';
if (isset($_POST['mybutton'])){
    $fname=$_POST['fullname'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $address=$_POST['address'];
    $date=$_POST['join_date'];
    $gender=$_POST['gender'];
     $pric=$_POST['price'];
    


   $query="INSERT INTO members(fullname,contact,email,password,address,join_date,plan,gender,price) VALUES
    ('$fname','$contact','$email','$pwd','$address','$date','$gender','$pric')";
    $data=mysqli_query($connect,$query);


    
}
?>