<!DOCTYPE html>
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

	<title></title>
</head>
<body>
	<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div >
            <label>Id</label><br>
            <input type="text" name="Ticket_id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
     <?php 
      if(isset($_POST['showbtn'])){
      	$id=$_POST['Ticket_id'];
      	$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
	$sql="select * from user join movie on user.movie_id = movie.movie_id where ticket_id='{$id}'";
	$result=mysqli_query($conn,$sql) or die("Query unsuccessful");


	if(mysqli_num_rows($result)){
  	while($row=mysqli_fetch_assoc($result)){
      
     ?>
    <form action="updatedata.php" method="post">
        <div >
            <h1>User Name</h1><br>
            <input type="hidden" name="tid"  value="<?php echo $row['ticket_id'] ?>" />
            <input type="text" name="name" disabled="disabled" value="<?php echo $row['user_name'] ?>" /><br>
        </div>
        <div >
        <h1>Movie</h1><br>
		<input type="text"  disabled="disabled"  name="" value="<?php echo $row['movie_name'] ?>">
		</select>
        </div>
        <div>
            <h1>Movie Time</h1><br>
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
          </select>
        </div>
        <div>
            <h1>Phone Number</h1><br>
            <input type="text" disabled="disabled" name="phone_number" value="<?php echo $row['user_phone_no'] ?>" /><br>
        </div>
    <input class="submit" type="submit" value="Update" id="bt" />
    </form>
    <?php
}
}
}
    ?>
<!-- <form action="update1.php">
	<h1>ENTER TICKET ID</h1><br>
	<input type="number" name="ticket_id"><br>
	<h1>ENTER NEW DATE</h1><br>
	<input type="date" name="new_date"><br>
	<h1>ENTER NEW TIME</h1><br>
	<input type="time" name="new_time"><br>
	<input type="submit" name="update" value="update" id="updatebutton">
</form>-->
</body>
</html>