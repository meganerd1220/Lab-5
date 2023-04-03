<?php 
	session_start(); 
	include ("main_header.php"); 
?>

<html>
	<head>
	
	</head>
	
	<body>
	<center>
	<table>
	
	<form  name="login-form" method="POST" action="login_process_redirect.php" >
		<tr><td width=60> User ID: <input name="user_id" /></td><br></tr>
		<tr><td>Password: <input name="password" /><td></tr>
		<tr><td>Enter Code to Prove You're Human: <input name="vercode"/> <img src='captcha.php'/></td></tr><br>
	</td>
		</table>
		<input type="submit" value="Login" />
	</form>
	</center>
	</body>
</html>


