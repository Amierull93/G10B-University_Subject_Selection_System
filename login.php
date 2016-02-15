<?php

include("connection.php");

?>
<html>
<head>
<title>Home login</title>
<link href="login.css" rel="stylesheet" type="text/css"/>
</head>

<body>
		<div class="rightHome">
		<br>
			<div id="container">
			<p style="color:red;font-size:26pt;margin-bottom:0px;margin-left:45px;"><br>Login</p>
			
				<form id="indexform" action="login_code.php" method="post">
				<div class="radio1"><br>

					<input style="height:25px;width:214px;" type="text" maxlength="30" name="name" placeholder="Username">
				<br>
					<input style="height:25px;width:216px;margin-top: 3px;" type="password" name="password1" placeholder="Password" maxlength="20" >
				<br>
					<div class="rightHome1">
					<br>
						<input type="submit" id="submit" name="login1" value="Login"/>
					</div>
					<br>
					
				<br>
					<a class="top" href="#" style="font-size:10pt">Forgot password ?</a>
				<br>
					
				</div>
			</form>
		
			</div>
		</div>
	</html>
</body>
