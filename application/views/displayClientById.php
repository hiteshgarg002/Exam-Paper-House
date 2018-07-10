<script src='/citest/cbs/asset/jquery-2.2.1.min.js'></script>
<script src='/citest/cbs/asset/statecity.js'></script>


<?php
	extract($result);
?>

<html>
	<body bgcolor="sky blue">
	<center>
		<form action="update" method="POST" enctype='multipart/form-data' >
			<input type="hidden" value='<?php echo $clientid; ?>' name='clientid'>
			<table >
				<caption><h3><i>Client Update </i></h3></caption>
				<tr>
					<td><b><i> First Name:</i></b></td>
					<td><input type='text' name='cfn' placeholder="First Name" value='<?php echo $firstname;?>'></td>
				</tr>
				<tr>
					<td><b><i> Last Name:</i></b></td>
					<td><input type='text' name='cln'  placeholder="Last Name" value='<?php echo $lastname;?>'></td>
				</tr>
				<tr>
					<td><b><i>Email ID:</i></b></td>
					<td><input type='text' name='cemail' value='<?php echo $email;?>'></td>
				</tr>
				<tr>
					<td><b><i>Mobile Number:</i></b></td>
					<td><input type='text' name='cpn' value='<?php echo $mobileno;?>'></td>
				</tr>
				<tr>
					<td><b><i>Date OF Birth:</i></b></td>
					<td><input type='text' name='cdob' value='<?php echo $dob;?>'></td>
				</tr>
				<tr>
					<td><b><i>Gender :</i></b></td>


					<?php
					if($gender=="male"){

						echo"<td><input type='radio' name='gender' value='Male' checked>Male &nbsp;&nbsp;<input type='radio' name='gender' value='Female'>Female</td>";
					}
					else{
						echo"<td><input type='radio' name='gender' value='Male' >Male &nbsp;&nbsp;<input type='radio' name='gender' value='Female' checked>Female</td>";
					}
					?>

				</tr>
				<tr>
					<td><b><i>Address:</i></b></td>
					<td><input type='text' name='cadd' value='<?php echo $address;?>'></td>
				</tr>
				<tr>
					<td><b><i>State:</i></b></td>

					<td><input type='hidden' name='pstate' value='<?php echo $state; ?>'><?php echo $ustate; ?><br><select  id='state' name='us'></select></td>
				</tr>
				<tr>
					<td><b><i>City:</i></b></td>
					<td><input type='hidden' name='pcity' value='<?php echo $city; ?>'><?php echo $ucity; ?><br><select  id='city' name='uc'></select></td>
				</tr>
				<tr>
					<td><b><i>Password :</i></b></td>
					<td><input type='password' name='password' value='<?php echo $password;?>'></td>
				</tr>

			</table>
			<br>
				<td><input type='submit' value='Edit' name='btn'></td>
					<td><input type='submit' value='Delete' name='btn'>
		</form>
	</center>

		<?php
			echo "$msg";

		?>
	</body>
</html>
