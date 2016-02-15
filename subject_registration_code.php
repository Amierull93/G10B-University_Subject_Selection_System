<?php
include("connection.php");
session_start();

$query = mysql_query("select * from student where S_ID = '$_SESSION[ID]'") or die(mysql_error());
$row = mysql_fetch_array($query);

$sub_reg1 = $_POST['drop'];


$query2 = mysql_query("select * from subject where sub_name = '$sub_reg1'") or die(mysql_error());
$row2 = mysql_fetch_array($query2);

$std_id= $row['S_ID'] ;
$fid=$row['faculty_ID'] ;
$pid= $row['PID'] ;
$sub_reg = $row2['sub_ID'];

$query1="INSERT INTO stud_sub(S_ID,faculty_ID,PID,sub_ID) VALUES ('$std_id','$fid','$pid','$sub_reg')" or die(mysql_error());
$rs=mysql_query($query1)or die("Could Not Perform the Query");

	echo "<script>alert('Register Successfull ');
document.location.href='subject_registration.php'</script>\n"; 

?>
