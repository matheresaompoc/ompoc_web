<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require('SQLConnect.php');

if (isset($_REQUEST['studID'])) 
{

	$studID = stripslashes($_REQUEST['studID']);
	$studID = mysqli_real_escape_string($con, $studID);
	$lastname = stripslashes($_REQUEST['lastname']);
	$lastname = mysqli_real_escape_string($con, $lastname);
	$firstname = stripslashes($_REQUEST['firstname']);
	$firstname = mysqli_real_escape_string($con, $firstname);
	$MI = stripslashes($_REQUEST['MI']);
	$MI = mysqli_real_escape_string($con, $MI);
	$course = stripslashes($_REQUEST['course']);
	$course = mysqli_real_escape_string($con, $course);
	$yearlevel = stripslashes($_REQUEST['yearlevel']);
	$yearlevel = mysqli_real_escape_string($con, $yearlevel);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);

	$query = "INSERT into `students_info` (studID, lastname, firstname, MI, course, yearlevel,  password)
		VALUES ('$studID', '$lastname', '$firstname', '$MI', '$course', '$yearlevel', '" . md5($password) . "')";
		$result = mysqli_query($con, $query);

	if ($result) 
	{
	echo "<div>
	<h3>You are registered successfully.</h3><br/>
	<p class='link'>Click here to <a href='login.php'>Login</a></p>
	</div>";
	} 

	else {

	echo "<div class='form'>
	<h3>Required fields are missing.</h3><br/>
	<br> </br>
	<p class='link'>Click here to <a href='registration.php'>registration</a>
	again.</p>
	</div>";
	}
}
	?>
</body>
</html>