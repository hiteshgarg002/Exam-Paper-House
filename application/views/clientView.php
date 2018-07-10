<script src='/citest/assets/jquery-2.2.1.min.js'></script>
<script src='/citest/assets/statecity.js'></script>

<html>
	<body bgcolor="sky blue">
	<center>

		<form action="insert" method="POST" enctype='multipart/form-data' >
			<table >
				<caption><h3><i>Client Registration Form</i></h3></caption>
				<tr>
					<td><b><i>First Name:</i></b></td>
					<td><input type='text' name='cfn' placeholder="First Name"></td>
				</tr>
				<tr>
					<td><b><i> Last Name:</i></b></td>
					<td><input type='text' name='cln'  placeholder="Last Name"></td>
				</tr>
				<tr>
					<td><b><i>Email ID:</i></b></td>
					<td><input type='text' name='cemail'></td>
				</tr>
				<tr>
					<td><b><i>Mobile Number:</i></b></td>
					<td><input type='text' name='cpn'></td>
				</tr>
				<tr>
					<td><b><i>Date Of Birth:</i></b></td>
					<td><input type='text' name='cdob'></td>
				</tr>
				<tr>
					<td><b><i>Gender :</i></b></td>
					<td><input type='radio' name='gender' value='Male'>Male&nbsp;&nbsp;<input type='radio' name='gender' value='Female'>Female</td>
				</tr>
				<tr>
					<td><b><i>Address:</i></b></td>
					<td><input type='text' name='cadd'></td>
				</tr>
				<tr>
					<td><b><i>State:</i></b></td>
					<td><select  id='state' name='us'></select></td>
				</tr>
				<tr>
					<td><b><i>city:</i></b></td>
					<td><select  id='city' name='uc'></select></td>
				</tr>
				<tr>
					<td><b><i>Password :</i></b></td>
					<td><input type='password' name='password'></td>
				</tr>

			</table>
			<br>
			<input type='submit'><input type='reset'>
		</form>
	</center>

		<?php
			echo "$msg";

		?>
	</body>
</html>
