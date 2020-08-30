<?php 
 $ticketid=$_POST['ticket_id'];
$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
$sql="delete from user  where ticket_id = '{$ticketid}' ";

$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
echo "Data Deleted Successfully!!!";

 ?>
 