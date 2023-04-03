<!DOCTYPE html>
<?php
session_start();

if(($_SESSION['role'] !="F"))
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
	include ("faculty_menu.php");
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
	$sql_courses="SELECT * FROM courses_tab where fac_id='$uid'";
	$result1=$connect->query($sql_courses);
	$row1 = $result1->fetch_assoc();
	
	echo "<h3>Courses Currently Teaching:</h3>";	
	echo "Course ID: ", $row1['course_id']."<br>";
	echo "Course Name: ", $row1['course_name']."<br>";

?>
</td>
<td>
	<?php      
	$sql_fac_details="SELECT * FROM faculty_tab where fac_id='$uid'";
	$result2=$connect->query($sql_fac_details);
	$row2 = $result2->fetch_assoc();
	
	echo "<h3>Personal Details:</h3>";	
	echo "Faculty ID: ", $row2['fac_id']."<br>";
	echo "Name: ", $row2['fac_name']."<br>";
	echo "Faculty Member Since: ", $row2['fac_date_of_join']."<br>";
	echo "Qualification: ", $row2['qualification']."<br>";
	echo "Department: ", $row2['department']."<br>";

?>
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