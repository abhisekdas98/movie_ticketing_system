<html>
	<?php
	$Qid= $_GET['id'];
	if($Qid=='A'){
		$id=$Qid;
	}else{
		$id=$_POST['ticket_id'];	
	}
	$conn=mysqli_connect("localhost","root","25111998","abhisekproject") or die("connection failed");
	if($Qid=='A'){
		$sql="select * from user join movie on user.movie_id = movie.movie_id";
	}else{
		$sql="select * from user join movie on user.movie_id = movie.movie_id where ticket_id='{$id}'";
	}
	$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
	$No_of_rows=mysqli_num_rows($result);

if($No_of_rows==0)
 echo "<h1>Ticket Expired!!!!</h1>"

	?>

	<div>
    <h2>Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Ticket Id</th>
        <th>Name</th>
        <th>Phone No</th>
        <th>Movie Name</th>
        <th>Movie Time</th>
        <th>Movie Date</th>
        </thead>
        <tbody>
        	<?php
        	while($row=mysqli_fetch_assoc($result)){
        		?>
            <tr>
                <td><?php echo $row['ticket_id'] ?></td>
                <td><?php echo $row['user_name'] ?></td>
                <td><?php echo $row['user_phone_no'] ?></td>
                <td><?php echo $row['movie_name'] ?></td>
                <td><?php echo $row['movie_time'] ?></td>
                <td><?php echo $row['movie_date'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</html>

