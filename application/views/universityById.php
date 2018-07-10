<script src='/citest/assets/jquery-2.2.1.min.js'></script>
<script src='/citest/assets/statecity.js'></script>
<?php
extract($result);
?>
<html>
<table>
<tr>
<td valign='top'>
<form action='update' method='post' >
<input type='hidden' value='<?php echo $uid;?>' name='uid'>
<table>
<caption><b>Update University Register<b></caption>
<tr><td>University Name</td>
<td><input type='text' name='uname' value='<?php echo $uname;?>'></td>
</tr>

<tr><td>Email</td>
<td><input type='text' name='email'  value='<?php echo $email;?>'></td>
</tr>
<tr><td>Contact Person</td>
<td><input type='text' name='contact' value='<?php echo $contact;?>'></td>
</tr>

<tr><td>Mobile No.</td>
<td><input type='text' name='mobile'  value='<?php echo $mobile;?>'></td>
</tr>

<tr><td>Landline</td>
<td><input type='text' name='landline' value='<?php echo $landline;?>'></td>
</tr>

<tr><td>Address</td>
<td><textarea  name='addr' rows='3' cols='25'>
 <?php echo $addr;?>
</textarea></td>
</tr>

<tr><td>State</td>
<td><input type='hidden' name='pstate'  value='<?php echo $st;?>'><?php echo $ustate;?><br>
<select id='state' name='st'></select></td>
</tr>

<tr><td>City</td>
<td>
<input type='hidden' name='pcity' value='<?php echo $city;?>'><?php echo $ucity;?><br>
<select id='city' name='city'></select></td>
</tr>

<tr><td>Pincode</td>
<td><input type='text' name='pin' value='<?php echo $pin;?>'></td>
</tr>

<tr><td>Description</td>
<td><input type='text' name='desc'  value='<?php echo $desc;?>'></td>
</tr>


<tr>
<td>
<input type='submit' value='Edit' name='btn'>
</td>
<td><input type='submit' value='Delete' name='btn'>
</td>
</table>
<br><br>

<?php echo $msg ;?>
</form>
</td>
<td valign='top'>
<form action='updateImage' method='post' enctype='multipart/form-data'>
<input type='hidden' value='<?php echo $uid;?>' name='uid'>
<img src='/citest/images/university/<?php echo $logo; ?>' width='100' height='100'><br><br>
<input type='file' name='logo' value='<?php echo $logo;?>'><br><br>
<input type='submit' value='Edit Image' name='btn1'><br><br>
<?php echo $msg ;?>
</form>
</td>
</tr>
</table>
<html>


