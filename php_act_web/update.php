<html>
<head>
<meta charset="utf-8"/>
<title>Update User Information</title>
<link rel="stylesheet" href="style.css"/>

</head>
<body>
//to update a user
<?php
include("SQLConnect.php");
$di = $_GET['i'];
$query = mysqli_query($con, "SELECT * from students_info WHERE studID='$di'") or
die(mysqli_error($con));

?>
<div class="form" align="center">
<form action="" method="post">
<table border=0 style="background-color:white;" align="center" width="100%">
<?php while($row = mysqli_fetch_array($query))
{
?>
<th>Update User Information</th>
<tr>
<td align="center"><input type="hidden" name=studID value="<?php

echo $row['studID']; ?>">

<input type="text" name=firstname value="<?php echo $row['firstname'];?>"></td>
</tr>
<tr>
<td align="center"><input type="text" name=password value="<?php echo $row['password']; ?>"></td>

</tr>

<td align="center"><input type="submit" name="s" value="Update Now"></td>
</tr>
<?php } ?>
</table>
</form>
</div>
<?php
if (isset($_POST['s']))
{
$firstname = $_POST['firstname'];
$password = $_POST['password'];

$studID = $_POST['studID'];
mysqli_query($con, "UPDATE students_info SET firstname='$firstname', password='$password' WHERE studID='$studID'");

echo
"<script>window.location.href='http://localhost/php_act_web/homepage.php'</script
>";
}
?>
</body>
</html>