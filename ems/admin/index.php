<!DOCTYPE html>
<?php
session_start();

if(($_SESSION['role'] !="A"))
{
echo "You are trying to access a BAD Page. <a href='login.php' >Login Again</a> ";
session_destroy();

}
else{

?>
<html>
<head>
	<title>Education Management System</title>

	<!-- Including Bootstrap Necessary Files -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<LINK REL="stylesheet" HREF="css/styles.css" TYPE="text/css">
<script type="text/javascript" src="chat/js/jquery.js"></script>
<script type="text/javascript" src="chat/js/chat.js"></script>	
<link type="text/css" rel="stylesheet" media="all" href="chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="chat/css/screen.css" />

	<script>
	  function coordinator_report()
	  {
		alert ("Please upload the Coordinator's Report under Uploads->Coordinator's Report. Then only you will be able to submit your Appraisal");
	  }
	</script>
</head>
<body>
<?php 
	$uid=($_SESSION['id']);
	include ("header_page.php"); 
	include ("admin_menu.php");
	?>

<div id="wrapper">
<table align=center bgcolor="#FFFFFF" width=1000px>
<tr><td>

<?php
if(isset($_SESSION['id']))

{
?>

<?php 
		include ("db_connection.php");
		$uid=($_SESSION['id']);
?>

<?php      
	$sql_cs_fac="SELECT * FROM faculty_tab where department='Computer Science'";
	$result1=$connect->query($sql_cs_fac);
	$row1 = $result1->fetch_assoc();
	
	echo "<h3>Faculty in the Computer Science Department:</h3>";	
	echo $row1['fac_name']."<br>";

?>

<?php      
	$sql_egl_fac="SELECT * FROM faculty_tab where department='English'";
	$result2=$connect->query($sql_egl_fac);
	$row2 = $result2->fetch_assoc();
	
	echo "<h3>Faculty in the English Department:</h3>";	
	echo $row2['fac_name']."<br>";

?>
</td>
<td>
<?php      
	$sql_cs_stu="SELECT * FROM student_tab where stu_major='Computer Science'";
	$result3=$connect->query($sql_cs_stu);
	$row3 = $result3->fetch_assoc();
	
	echo "<h3>Students in the Computer Science Department:</h3>";	
	echo $row3['stu_name']."<br>";

?>
<?php      
	$sql_egl_stu="SELECT * FROM student_tab where stu_major='English'";
	$result4=$connect->query($sql_egl_stu);
	$row4 = $result4->fetch_assoc();
	
	echo "<h3>Students in the English Department:</h3>";	
	echo $row4['stu_name']."<br>";

?>
</td>

<?php

}
else
{
   echo "session expired";

}
?> 
<?php }?>  


</td></tr></table>

<?php include ("footer_page.php"); ?>
</div>


      </body>
</html>