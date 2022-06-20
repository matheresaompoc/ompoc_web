<?php
//delete.php

include("./SQLConnect.php");
// $query = mysql_query("DELETE FROM tbl_students WHERE stud_ID = '".$_GET['id']."'") or die(mysql_error());
$query = mysqli_query($con,"Update students_info SET status='Deleted' WHERE studID ='".$_GET['studID']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='../homepage.php'><input type='button' value='Back'/></a>";
?>