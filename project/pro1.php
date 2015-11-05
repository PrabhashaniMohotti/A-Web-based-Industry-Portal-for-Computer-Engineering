<html>
	<head>
		<title> PHP login page </title>
	</head>
	
	<body>
		<h2> Your Information System </h2>
		
		<?php
			$Fname   = $_GET['First_Name'];
			$Lname   = $_GET['Last_Name'];
			$add    = $_GET['Email_Add'];
			
			echo "<p> Thank you, $Fname login our web site! </p>";
			
			echo "<I> $Fname $Lname. </I>";
			echo "<I><br> $add </br></I>";	
		?>
	</body>
</html>