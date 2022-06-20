<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php
	require('SQLConnect.php');
	session_start();
	if (isset($_POST['studID'])) {
	$studID = stripslashes($_REQUEST['studID']);
	$studID = mysqli_real_escape_string($con, $studID);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);

	$query = "SELECT * FROM `students_info` WHERE studID='$studID'
	AND password='" . md5($password) . "'";
	$result = mysqli_query($con, $query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if ($rows == 1) {
	$_SESSION['studID'] = $studID;

	header("Location: homepage.php");

	} else {
	echo "<div class='form'>
	<h3>Incorrect student ID/password.</h3><br/>
	<p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
	</div>";
	}
	} else {
	?>
	<form class="form" method="post" name="login">
	<h1 class="login-title">Login</h1>
	<input type="text" class="login-input" name="studID"
	placeholder="Student ID" autofocus="true"/>
	<input type="password" class="login-input" name="password"
	placeholder="Password"/>
	<input type="submit" value="Login" name="submit" class="login-button"/>
	<p class="link"><a href="register.php">Create an account</a></p>
	</form>
	<?php
	}
	?>
</body>
</html>