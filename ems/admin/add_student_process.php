<?php

$id = $_POST['stu_id'];
$pwd = $_POST['stu_pwd'];
$name = $_POST['stu_name'];
$eyear = $_POST['yoe'];
$major = $_POST['major'];
$cgpa = $_POST['cgpa'];
$grad_year = $_POST['gyr'];

include("db_connection.php");
include("header_page.php");
include("admin_menu.php");

?>

<?php

$sql = "INSERT INTO student_tab (`sid`, `stu_id`, `stu_name`, `stu_year_of_enrollment`, `stu_major`, `CGPA`, `year_of_graduation`) VALUES (0, '$id', '$name', '$eyear', '$major', '$cgpa', '$grad_year')";
$sql = "INSERT INTO users_tab (`sid`, `user_id`, `password`, `role`) VALUES (0, '$id', '$pwd', 'S')";
		
$result = $connect->query($sql);

if ($result == FALSE)
{
	echo "Error: ". $connect->error;
}

else
{
	echo "<br><br><center> <h1>Student Successfully Added </h1>";
	echo "<br><br><br><br><button name='home' class='submitbtn'><a href='admin_home.php'> Back to Home </a></center>";
	
}
?>