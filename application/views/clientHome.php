<html>
<?php
	echo "<h4>Id:".$_SESSION['SCLIENTID']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['SFIRESTNAME']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a herf=#>Logout</a></h4><hr color=red>";
?>
	<body bgcolor="sky blue">

		<form action="checkPassword"  >
			<table >

				<tr>
					<td valign='top'>
						<a href="/citest/index.php/clientController/UpdateProfile" target="mw">Update Profile</a><br>
						<a href="/citest/index.php/clientController/ChangePassword" target="mw">Change Password</a><br>

					</td>
					<td valign='top'>
						<iframe frameborder='0' height='700' width="700" name="mw" src='/citest/index.php/userviewcontroller/userview'></iframe>
					</td>
				</tr>

			</table>


		</form>


		<?php
			echo "$msg";

		?>
	</body>
</html>
