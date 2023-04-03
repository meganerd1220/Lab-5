<?php

$id = $_POST['fac_id'];
$pwd = $_POST['fac_pwd'];
$name = $_POST['fac_name'];
$jyear = $_POST['join'];
$qual = $_POST['qual'];
$dept = $_POST['dept'];

include("db_connection.php");
include("header_page.php");
include("admin_menu.php");

?>

<?php

$sql = "INSERT INTO faculty_tab (`sid`, `fac_id`, `fac_name`, `fac_date_of_join`, `qualification`, `department`) VALUES (0, '$id', '$name', '$jyear', '$qual', '$dept')";
$sql = "INSERT INTO users_tab (`sid`, `user_id`, `password`, `role`) VALUES (0, '$id', '$pwd', 'F')";
		
$result = $connect->query($sql);

if ($result == FALSE)
{
	echo "Error: ". $connect->error;
}

else
{
	echo "<br><br><center> <h1>Faculty Member Successfully Added </h1>";
	echo "<br><br><br><br><button name='home' class='submitbtn'><a href='admin_home.php'> Back to Home </a></center>";
	
}
?>