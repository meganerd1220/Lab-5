<html>
	
	<body>
	<?php
		include("header_page.php");
	
		include("admin_menu.php");
	?>
	
	<center>
	<br>
	<form  name="add_dept" method="POST" action="add_department_process.php" >
		<table>
		<tr>
			<td colspan=2 align = "center"> <h3> Add Department </h3> </td>
		</tr>
		<tr>
			<td> Department ID: </td>
			<td> <input name="dept_id" /> </td>
		</tr>
		<tr>
			<td> Department Name: </td>
			<td> <input name="dept_name" /> </td>
		</tr>
		<tr>
			<td> Department Chair: </td>
			<td> <input name="chair" /> </td>
		</tr>
		<tr>
			<td> Department Dean: </td>
			<td> <input name="dean" /> </td>
		</tr>
		<tr>
			<td> Budget: </td>
			<td> <input name="budget" /> </td>
		</tr>
		<tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add a Department" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>