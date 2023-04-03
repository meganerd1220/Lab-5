<html>
	
	<body>
	<?php
		include("header_page.php");
	
		include("admin_menu.php");
	?>
	
	<center>
	<br>
	<form  name="add_stu" method="POST" action="add_student_process.php" >
		<table>
		<tr>
			<td colspan=2 align = "center"> <h3> Add Student </h3> </td>
		</tr>
		<tr>
			<td> Student ID: </td>
			<td> <input name="stu_id" /> </td>
		</tr>
		<tr>
			<td> Student Password: </td>
			<td> <input name="stu_pwd" /> </td>
		</tr>
		<tr>
			<td> Student Name: </td>
			<td> <input name="stu_name" /> </td>
		</tr>
		<tr>
			<td> Year of Enrollement: </td>
			<td> <input name="yoe" /> </td>
		</tr>
		<tr>
			<td> Major: </td>
			<td> <input name="major" /> </td>
		</tr>
		<tr>
			<td> Cumulative GPA: </td>
			<td> <input name="cgpa" /> </td>
		</tr>
		<tr>
			<td> Graduation Year: </td>
			<td> <input name="gyr" /> </td>
		</tr>
		<tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add a Student" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>