<?php

$id = $_POST['dept_id'];
$name = $_POST['dept_name'];
$chair = $_POST['chair'];
$dean = $_POST['dean'];
$budget = $_POST['budget'];

include("db_connection.php");
include("header_page.php");
include("admin_menu.php");

?>

<?php

$sql = "INSERT INTO department_tab (`sid`, `dept_id`, `dept_name`, `dept_chair`, `dept_dean`, `budget`) VALUES (0, '$id', '$name', '$chair', '$dean', '$budget')";
		
$result = $connect->query($sql);

if ($result == FALSE)
{
	echo "Error: ". $connect->error;
}

else
{
	echo "<br><br><center> <h1>Department Successfully Added </h1>";
	echo "<br><br><br><br><button name='home' class='submitbtn'><a href='admin_home.php'> Back to Home </a></center>";
	
}
?>