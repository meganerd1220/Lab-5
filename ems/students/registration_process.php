<?php

$reg_id = rand(1,1000);
$cid = $_POST['course_id'];
$sid = $_POST['stu_id'];
$fid = $_POST['fac_id'];
$semester = $_POST['semester'];


include("db_connection.php");
include("header_page.php");
include("student_menu.php");

?>

<?php

$sql = "INSERT INTO registration_tab (`sid`, `reg_id`, `course_id`, `stu_id`, `fac_id`, `semester`) VALUES (0, '$reg_id', '$cid', '$sid', '$fid', '$semester')";
		
$result = $connect->query($sql);

if ($result == FALSE)
{
	echo "Error: ". $connect->error;
}

else
{
	echo "<br><br><center> <h1>Sucessfully Registered </h1>";
	echo "<br><br><br><br><button name='home' class='submitbtn'><a href='index.php'> Back to Home </a></center>";
	
}
?>