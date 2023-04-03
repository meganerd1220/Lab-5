<html>
	
	<body>
	<?php
		include("header_page.php");
	
		include("admin_menu.php");
	?>
	
	<center>
	<br>
	<form  name="add_course" method="POST" action="add_course_process.php" >
		<table>
		<tr>
			<td colspan=2 align = "center"> <h3> Add Course </h3> </td>
		</tr>
		<tr>
			<td> Course ID: </td>
			<td> <input name="course_id" /> </td>
		</tr>
		<tr>
			<td> Course Name: </td>
			<td> <input name="course_name" /> </td>
		</tr>
		<tr>
			<td> Faculty ID: </td>
			<td> <input name="fac" /> </td>
		</tr>
		<tr>
			<td> Semester Offered: </td>
			<td> <input name="term" /> </td>
		</tr>
		<tr>
			<td> Credits: </td>
			<td> <input name="credits" /> </td>
		</tr>
		<tr>
			<td> Pre-Requisites: </td>
			<td> <input name="prereq" /> </td>
		</tr>
		<tr>
			<td> Type: </td>
			<td> <input name="type" /> </td>
		</tr>
		<tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add a Course" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>