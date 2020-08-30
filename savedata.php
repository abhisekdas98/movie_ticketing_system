<?php 
 $user_name=$_POST['name'];
$user_phone=$_POST['phone'];
 $movie_name=$_POST['movie'];
 $movie_time=$_POST['time'];
 $movie_date=$_POST['date'];
 $no_of_tickets=$_POST['number_of_tickets'];

$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
$sql="insert into user(user_name,user_phone_no,movie_id,movie_time,no_of_tickets,movie_date) values ('{$user_name}','{$user_phone}','{$movie_name}','{$movie_time}','{$no_of_tickets}','{$movie_date}')";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
header("Location: http://localhost/MovieProject/index.php?id=A");


 ?>





