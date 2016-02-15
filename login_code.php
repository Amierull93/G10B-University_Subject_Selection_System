<?php
include "connection.php";

session_start();

if(isset($_POST['name'])&&isset($_POST['password1']))
{
	$username = $_POST['name'];
	$password = $_POST['password1'];
	
		$query = mysql_query("select * from student where username = '$username' and password = '$password'") or die(mysql_error());
		$record = mysql_num_rows($query);
		if($record > 0)
		{
			
			$row=mysql_fetch_array($query);			
			$_SESSION['ID'] = $row['S_ID'];	
	
			echo '<script = "JAVASCRIPT">
			window.location="Student.php";</script>';
					
		}
		else
		{
			echo '<script = "JAVASCRIPT">
			alert("Please try again!!!");
			window.location="login.php";</script>';
		
		}
}

?>
