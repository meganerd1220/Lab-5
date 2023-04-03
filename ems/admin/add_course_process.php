<?php

$id = $_POST['course_id'];
$name = $_POST['course_name'];
$fac_id = $_POST['fac'];
$semester = $_POST['term'];
$credits = $_POST['credits'];
$prereq = $_POST['prereq'];
$type = $_POST['type'];

include("db_connection.php");
include("header_page.php");
include("admin_menu.php");

?>

<?php

$sql = "INSERT INTO courses_tab (`sid`, `course_id`, `course_name`, `fac_id`, `offered_in`, `credits`, `pre_req`, `type`) VALUES (0, '$id', '$name', '$fac_id', '$semester', '$credits', '$prereq', '$type')";
		
$result = $connect->query($sql);

if ($result == FALSE)
{
	echo "Error: ". $connect->error;
}

else
{
	echo "<br><br><center> <h1>Course Successfully Added </h1>";
	echo "<br><br><br><br><button name='home' class='submitbtn'><a href='admin_home.php'> Back to Home </a></center>";
	
}
?>