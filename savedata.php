<?php 
 $user_name=$_POST['name'];
$user_phone=$_POST['phone'];
 $movie_name=$_POST['movie'];
 $movie_time=$_POST['time'];
 $movie_date=$_POST['date'];

$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
 $sql1="select ticket_id  from user where movie_time = '{$movie_time}' and movie_date = '{$movie_date}'";
  $result1=mysqli_query($conn,$sql1) or die("Query unsuccessful");
  $No_of_rows=mysqli_num_rows($result1);
  if($No_of_rows<=20)
  {
  	$sql="insert into user(user_name,user_phone_no,movie_id,movie_time,movie_date) values ('{$user_name}','{$user_phone}','{$movie_name}','{$movie_time}','{$movie_date}')";
   $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
   header("Location: http://localhost/MovieProject/index.php?id=A");
}else{
	echo "<h1>HouseFull!!!</h1>";
}

	



 ?>





