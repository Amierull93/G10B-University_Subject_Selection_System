<?php
include "connection.php";
session_start();

$a=$_REQUEST['stud_sub_id'];

$results= mysql_query("DELETE FROM stud_sub WHERE stud_sub_id ='$a'") or die(mysql_error()); 	
$rs=mysql_query($results)or die("Could Not Perform the Query");
echo '<script = "JAVASCRIPT">
	alert("subject has been deleted");
	window.location="subject_registration.php";</script>';

?>
