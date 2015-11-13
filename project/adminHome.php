<html>
		<style>
			body{
				background-image: url(computer.jpg);            
               	background-size: 100%;
              	background-origin: content;
            }

			h1.one{
				font-family: "Goudy Old Style";
				font-style: italic;
				font-size: 38px;
				font-color: black;
				border-style: solid;
			    border-width: 5px;
				border-color: Cyan;
				background-color: DarkCyan;
				padding-top: 15px;
				padding-right: 45px;
				padding-bottom: 12px;
				padding-left: 50px; 
			}
			
			.two{
				font-family: "Goudy Old Style";
				font-style: italic;
				font-size: 20px;
				color: white;
				background-color: LightSeaGreen;
				border-style: solid;
				border-color: black;
				border-width: 1px;
				padding-top: 8px;
				padding-right: 30px;
				padding-bottom: 8px;
				padding-left: 30px;
				text-align: center;
			}
		</style>

<head>
		<title> admin page </title>
</head>

	<body>
		<h1 class = "one"> <center> Welcome <?php echo $_GET['id']?> </center></h1><br>
		
		<h2><br> <a class = "two" href = "add_company.html" style = "text-decoration:none"> Add companies and contact persons to the database </br></h2></a>
		<h2><br> <a class = "two" href = "add_company.html" style = "text-decoration:none"> Contact persons to the database </br></h2></a>
		<h2><br> <a class = "two" href = "facebook.com" style = "text-decoration:none"> Assign students to the companies </br></h2></a>
		<h2><br> <a class = "two" href = "facebook.com" style = "text-decoration:none"> Send messages to companies and students </br></h2></a>
		<h2><br> <a class = "two" href = "facebook.com" style = "text-decoration:none"> Configure authentication system </br></h2></a>

	</body>
</html>
