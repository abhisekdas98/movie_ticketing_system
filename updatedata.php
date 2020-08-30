<?php 
 $ticketid=$_POST['tid'];
 $mt=$_POST['time'];
$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
$sql="update user set movie_time = '{$mt}' where ticket_id = '{$ticketid}' ";
echo $sql;
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
header("Location: http://localhost/MovieProject/index.php?id=A");


 ?>