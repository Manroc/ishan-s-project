<?php 
include 'connection.php';

$id=$_GET['id'];

$query=  "UPDATE members SET Approve=false WHERE id='$id'";
$data= mysqli_query($connect, $query); 
header("Location: membersList.php");
?>