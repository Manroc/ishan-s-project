<html>
    <head>
        <title>Display</title>
    </head>
    <style>
        body{
            background-color: lightblue;
        }
        table{
            background-color: lightgoldenrodyellow;
        }
        .update{
            background-color: Green;
            color: white;
            border: 0;
            border-radius: 5px;
            width: 70px;
            height: 22px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete{
            background-color: red;
            color: white;
            border: 0;
            border-radius: 5px;
            width: 70px;
            height: 22px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</html>
<?php 
include("connection.php");?>
<a href="register.php"><button style="background-color: green; color:white"> Add Member</button></a> <br><br>
<a href="Adash.php"><button style="background-color: green; color:white"> Back</button></a>
<?php
session_start();
 if(!isset($_SESSION['uname'])) {
    header("Location: admin.php");

}
$query=  "SELECT * FROM members";
$data= mysqli_query($connect, $query); //execute query
$total=mysqli_num_rows($data);

if($total !=0)
{
    ?>
    <h2 align="center"><mark>Displaying All Records</mark></h2>
   <center><table border="1" cellpadding="10px" cellspacing="0px">
    <tr>
        <th>ID</th>
        <th>FULL Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Date_of_Join</th>
        <th>Price</th>
        <th>Gender</th>
        
        <th>Operation</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
        echo " <tr>
        <td>".$result['id']."</td>
        <td>".$result['fullname']."</td>
        <td>".$result['contact']."</td> 
        <td>".$result['email']."</td>
        <td>".$result['password']."</td>
        <td>".$result['address']."</td>
        <td>".$result['join_date']."</td>
        <td>".$result['price']."</td>
        <td>".$result['gender']."</td>
      
        <td><a href=update.php?id=$result[id]><input type='submit' value='Update' class='update'></a>

        <a href=delete.php?id=$result[id]><input type='submit' value='Delete' class='delete' onclick='return checkedelete()'></a>
        </td>
        </tr>
        ";
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