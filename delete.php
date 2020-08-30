<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: lightblue;
		}
		#deletebutton
		{
			background-color: darkgrey;
		}

	</style>
</head>
<body>
<form action="deletedata.php" method="post">
	<h1>ENTER TICKET ID</h1><br>
	<input type="text" name="ticket_id"><br>
	<input type="submit" name="delete" value="delete" id="deletebutton">
</form>
</body>
</html>