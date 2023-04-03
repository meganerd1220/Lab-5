<html>
	
	<body>
	<?php
		include("header_page.php");
	
		include("student_menu.php");
	?>
	
	<center>
	<br>
	<form  name="add_class" method="POST" action="registration_process.php" >
		<table>
		<tr>
			<td colspan=2 align = "center"> <h3> Register for Classes </h3> </td>
		</tr>
		<tr>
			<td> Course ID: </td>
			<td> <input name="course_id" /> </td>
		</tr>
		<tr>
			<td> Student ID: </td>
			<td> <input name="stu_id" /> </td>
		</tr>
		<tr>
			<td> Faculty ID: </td>
			<td> <input name="fac_id" /> </td>
		</tr>
		<tr>
			<td> Semester: </td>
			<td> <input name="semester" /> </td>
		</tr>
		<tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add Class" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>