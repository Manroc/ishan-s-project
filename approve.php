<?php 
include 'connection.php';

$id=$_GET['id'];

$query=  "UPDATE members SET Approve=true WHERE id='$id'";
$data= mysqli_query($connect, $query); 


$to = "khadgi010@gmail.com";
$subject = "Test Email";
$message = "Hello, this is a test email!";
$headers = "From: manishkdka123@gmail.com";

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}

header("Location: membersList.php");
?>