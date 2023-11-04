<html>
   <head>
      <title>Display</title>
      <style>
         body
            {
               background: purple;
            }
            table
            {
               background: white;
            }
      </style>
</head>


<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM roombook";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
    <h2 align="center">Displaying All Records</h2>
     <center>  <table>
        <table border="1" cellspacing="6" width="75%">
            <tr>
            <th width="5%">ID</th>
            <th width="5%">Title</th>
            <th width="10%">First Name</th>
            <th width="10%">Last Name</th>
            <th width="20%">Email Id</th>
            <th width="10%">Phone Number</th>
            <th width="10%">Room type</th>
            <th width="10%">Number of rooms</th>
            <th width="10%">Check-in-date</th>
            <th width="10%">Check-out-date</th>   
            </tr>
    <?php
   while($result = mysqli_fetch_assoc($data))
   {
       echo"<tr>
               <td>".$result['id']."</td>
               <td>".$result['Title']."</td>
               <td>".$result['FName']."</td>
               <td>".$result['LName']."</td>
               <td>".$result['Email']."</td>
               <td>".$result['Phone']."</td>
               <td>".$result['TRoom']."</td>
               <td>".$result['NRoom']."</td>
               <td>".$result['cin']."</td>
               <td>".$result['cout']."</td>
            </tr>";
   }
 }
 else{
    echo"No records found";
 }
?>
</table>
</center>
