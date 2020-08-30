<html>
<head>
	<style type="text/css">
		body {
  background-color: lightblue;
}
  .bt
  {
  	background-color: green;
  }
  h1{
  	color:red;
  }
	</style>

</head>
<body>
	<form action="page2.php">
	   <h1><b>MOVIE TICKETS BOOKING</b></h1><br>
	    <h1>TO BOOK TICKET CLICK HERE:</h1>
	    <input type="submit" name="bookticket" value="BookTicket" class="bt">
	</form>
	<form action="update.php">
	    <h1>TO UPDATE BOOKED TICKET CLICK HERE:</h1>
	    <input type="submit" name="updateticket" value="UpdateTicket" class="bt">
	</form>
	<form action="delete.php">
	    <h1>TO DELETE BOOKED TICKET CLICK HERE:</h1>
	    <input type="submit" name="deleteticket" value="DeleteTicket" class="bt">
	</form>
	<form action="show.php">
	    <h1>TO SHOW BOOKED TICKET CLICK HERE:</h1>
	    <input type="submit" name="showticket" value="ShowTicket" class="bt">
	</form>

</body>
</html>