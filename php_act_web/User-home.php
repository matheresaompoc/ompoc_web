<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php
		/*
		* User-home.php
		* This is the landing page of all regular users
		*
		*/
		echo "Welcome User!";
	?>
		<?php include("./templates/header.php");?>
		<ul>
			<li><a href='#'>Home</a></li>
			<li><a href='#'>Profile</a></li>
			<li><a href='#'>Operations</a></li>
			<li><a href='./index.php'>Logout</a></li>
		</ul>
		
		<?php include("./templates/footer.php");?>
</body>
</html>