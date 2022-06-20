<?php
require('SQLConnect.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="form" align="center">
<H1>HOMEPAGE</H1>

<table  width="100%">

<tr>
<td width="100%">
<?php


$query = mysqli_query($con, "SELECT * FROM students_info") or

die(mysqli_error($con));
echo "<br ><br>";

echo "<table border='1' style='border-
collapse:collapse;background-color:gray; color:#fff;' align='center'>

<th>Student ID</th>
<th>Last Name</th>
<th>First Name</th>
<th>MI</th>
<th>Course</th>
<th>Year level</th>
<th>Delete</th>
<th>Update</th>
";
while($row = mysqli_fetch_array($query)){
echo "<tr>

<td>$row[studID]</td>
<td>$row[lastname]</td>
<td>$row[firstname]</td>
<td>$row[MI]</td>
<td>$row[course]</td>
<td>$row[yearlevel]</td>

<td align='center'><a style='text-decoration:none;' href='delete.php/?studID=$row[studID]'>Delete</a></td>

<td><a style='text-decoration:none;'

href='update.php/?i=$row[studID]'>Update</a></td>

</tr>";

}
echo "</table>";
?>
</table>


</div>
</body>
</html>