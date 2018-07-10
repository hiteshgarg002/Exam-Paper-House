<script src='/citest/assets/jquery-2.2.1.min.js'></script>
<script src='/citest/assets/statecity.js'></script>

<html>
<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<form action='insert' method='post' enctype='multipart/form-data'>

<center><b> University Register<b></center>
<table class="table table-bordered">

<tr><td>University Name</td>
<td><input type='text' class="form-control" name='uname'></td>
</tr>

<tr><td>Email</td>
<td><input type='text' class="form-control" name='email'></td>
</tr>
<tr><td>Contact Person</td>
<td><input type='text' class="form-control" name='contact'></td>
</tr>

<tr><td>Mobile No.</td>
<td><input type='text' class="form-control" name='mobile'></td>
</tr>

<tr><td>Landline</td>
<td><input type='text' class="form-control" name='landline'></td>
</tr>

<tr><td>Address</td>
<td><textarea  name='addr' class="form-control" rows='3' cols='25'>
</textarea></td>
</tr>

<tr><td>State</td>
<td><select id='state' class="form-control" name='st'></select></td>
</tr>

<tr><td>City</td>
<td><select id='city' class="form-control" name='city'></select></td>
</tr>

<tr><td>Pincode</td>
<td><input type='text' class="form-control" name='pin'></td>
</tr>

<tr><td>Description</td>
<td><input type='text' class="form-control" name='desc'></td>
</tr>

<tr><td>Logo</td>
<td><input type='file' class="form-control" name='logo'></td>
</tr>

<tr>
<td>
<input type='submit' class="btn btn-success">
</td>
<td><input type='reset' class="btn btn-danger">
</td>
</table>
<br><br>

<?php echo $msg ;?>
</form>
<html>


