<html>
<head>
	<style type="text/css">
		body {
  background-color: lightblue;
}
  #bt
  {
  	background-color: green;
  }
  h1{
  	color:red;
  }
	</style>

</head>
<body>
	<form action="savedata.php" method="post">
		<h1>User Name:</h1>
		<input type="text" name="name" ><br>
		<h1>Phone Number</h1>
		<input type="text" name="phone" ><br>
		<h1>Movie Name</h1>
     
<select name="movie">
  
<option value="" selected disabled>
  select movie
</option>
<?php 
$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
$sql="Select movie_id,movie_name from movie";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
while($row=mysqli_fetch_assoc($result)){
 ?>
 <option value="<?php echo $row['movie_id']?>">
   <?php echo $row['movie_name'] ?>
 </option>
 <?php
}
 ?>
</select><br>

<h1>Enter movie date</h1>
<input type="date" name="date" max="<?php
$date=date_create(date("Y-m-d"));
date_add($date,date_interval_create_from_date_string("7 days"));
echo date_format($date,"Y-m-d");
?>"  min="<?php echo date("Y-m-d")?>"><br> 
 
<label><h1>Movie Time</h1></label>
 <select name="time">
<option value="" selected disabled>select Time
</option><br>
<option  value="09:00:00">
 9:00:00
 </option>
 <option value="12:00:00">
 12:00:00
 </option>
 <option value="15:00:00">
 15:00:00
 </option>
 <option value="18:00:00">
 18:00:00
 </option>
 </select><br>
 <h1>Enter number of tickets</h1>
 <input type="text" name="number_of_tickets"><br>
 <input type="submit" name="submit" value="Submit" id="bt">
	</form>
</body>
</html>