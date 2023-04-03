<!DOCTYPE html>
<?php
session_start();

if(($_SESSION['role'] !="S"))
{
echo "You are trying to access a BAD Page. <a href='login.php' >Login Again</a> ";
session_destroy();

}
else{

?>
<html>
<head>
	<title>Education Management System</title>

</head>
<body>
<?php 
	$uid=($_SESSION['id']);
	include ("header_page.php"); 
	include ("student_menu.php");
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
		$sql_dept="SELECT * FROM student_tab where stu_id='$uid'";
		$result0=$connect->query($sql_dept);
		$row0 = $result0->fetch_assoc();
		$dept=$row0['stu_major'];
?>

<?php      
	$sql_fac="SELECT * FROM faculty_tab where department='$dept'";
	$result1=$connect->query($sql_fac);
	$row1 = $result1->fetch_assoc();
	
	echo "<h3>Faculty in the ".$row0['stu_major']." Department:</h3>";
	echo $row1['fac_name'];

?>
</td>
<td>
	<?php      
	$sql_stu_details="SELECT * FROM student_tab where stu_id='$uid'";
	$result2=$connect->query($sql_stu_details);
	$row2 = $result2->fetch_assoc();
	
	echo "<h3>Personal Details:</h3>";	
	echo "Student ID: ", $row2['stu_id']."<br>";
	echo "Name: ", $row2['stu_name']."<br>";
	echo "Student Since: ", $row2['stu_year_of_enrollment']."<br>";
	echo "Major: ", $row2['stu_major']."<br>";
	echo "Cumulative GPA: ", $row2['CGPA']."<br>";
	echo "Graduation Date: ", $row2['year_of_graduation'];

?>
</td>
<td>
	<?php      
	$sql_stu_courses="SELECT ALL* FROM registration_tab where stu_id='$uid'";
	$result3=$connect->query($sql_stu_courses);
	$row2 = $result3->fetch_array();
	
	echo "<h3>Courses:</h3>";	
	echo "Course ID: ", $row2['course_id'];
	
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include ("footer_page.php"); ?>
</div>


      </body>
</html>