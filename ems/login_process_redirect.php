<!DOCTYPE html>
<html>

<body>
<?php
session_start();

if(($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='') )
{
  echo "Wrong code: <a href='login.php'>Login Again</a> ";
}

else
{
	include ("db_connection.php");
	$uid=($_POST['user_id']);
	$pwd=($_POST['password']);
	
		$sql="SELECT * FROM users_tab where user_id='$uid' AND password='$pwd'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc(); 
 
		if($row['role']=='S')  //Students
		{
			$_SESSION['id']=$uid;
			$_SESSION['pwd']=$pwd;
			$_SESSION['role'] = "S";
			header("Location: /Web%20Apps/ems/students/");
		}
		elseif($row['role']=='F')  //Faculty
    {
		$_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "F";
        header("Location: /Web%20Apps/ems/faculty/"); 
		 
    }
		elseif($row['role']=='A')  //Admin
    {
        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "A";
        header("Location: /Web%20Apps/ems/admin/"); 
    }

		else
		{
			header("Location: /Web%20Apps/ems/login-error.php");
		}
} 

//-------------------------------Login Failed---------------------
     


?>
</body>
</html>
