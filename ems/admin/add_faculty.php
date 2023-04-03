<html>
	
	<body>
	<?php
		include("header_page.php");
	
		include("admin_menu.php");
	?>
	
	<center>
	<br>
	<form  name="add_fac" method="POST" action="add_faculty_process.php" >
		<table>
		<tr>
			<td colspan=2 align = "center"> <h3> Add Faculty Member </h3> </td>
		</tr>
		<tr>
			<td> Faculty ID: </td>
			<td> <input name="fac_id" /> </td>
		</tr>
		<tr>
			<td> Faculty Password: </td>
			<td> <input name="fac_pwd" /> </td>
		</tr>
		<tr>
			<td> Faculty Name: </td>
			<td> <input name="fac_name" /> </td>
		</tr>
		<tr>
			<td> Date Joined: </td>
			<td> <input name="join" /> </td>
		</tr>
		<tr>
			<td> Qualification: </td>
			<td> <input name="qual" /> </td>
		</tr>
		<tr>
			<td> Department: </td>
			<td> <input name="dept" /> </td>
		</tr>
		<tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add a Faculty Member" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>