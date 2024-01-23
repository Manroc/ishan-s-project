<?php 
include("connection.php");

$no=$_GET['id'];

$query= "DELETE FROM members WHERE id='$no' ";
$data = mysqli_query($connect,$query);

if($data)
{
    echo"<script>alert('Deleted Successfully')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/Gym/display.php" />

    <?php
}
else{
    echo"<script>alert('Failed to delete')</script>";
}
?>