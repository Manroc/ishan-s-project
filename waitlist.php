<?php
session_start();
if(!$_SESSION["uname"] == "admin") {
    echo '<script>alert("WE ARE INSIDE");</script>';
    header("Location: login.php");
    exit; // It's good practice to exit after a header redirect
}
?>
<?php 
include("connection.php");?>
<a href="register.php"><button style="background-color: green; color:white"> Add Member</button></a> <br><br>
<a href="Adash.php"><button style="background-color: green; color:white"> Back</button></a>
<?php
$query=  "SELECT * FROM members WHERE approve = 0;";
$data= mysqli_query($connect, $query); //execute query
$total=mysqli_num_rows($data);

if($total !=0)
{
    ?>
    <h2 align="center"><mark>Payment Pending List</mark></h2>
   <center><table border="1" cellpadding="10px" cellspacing="0px">
    <tr>
        <th>ID</th>
        <th>FULL Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Address</th>
        <th>Date_of_Join</th>
        <th>Price</th>
        <th>Gender</th>
        <th>Status</th>
        
        <th>Operation</th>
    </tr>
    <?php
   while ($result = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>".$result['id']."</td>
        <td>".$result['fullname']."</td>
        <td>".$result['contact']."</td> 
        <td>".$result['email']."</td>
        <td>".$result['address']."</td>
        <td>".$result['join_date']."</td>
        <td>".$result['price']."</td>
        <td>".$result['gender']."</td>
        <td>";

    if ($result['Approve']) {
        echo "Approved";
    } else {
        echo "Not Approved";
    }

    echo "</td>
        <td>
        <a href='approve.php?id=".$result['id']."'><input type='submit' value='Approve' class='approve'></a>
        <a href='update.php?id=".$result['id']."'><input type='submit' value='Update' class='update'></a>
        <a href='delete.php?id=".$result['id']."'><input type='submit' value='Delete' class='delete' onclick='return checkedelete()'></a>
        </td>
    </tr>";
}

}
else
{
    echo "No data Found";
}
?>
</table>
   </center>
   <script>
    function checkedelete(){
        return confirm('Are you sure you want to delete?');
    } 
   </script>