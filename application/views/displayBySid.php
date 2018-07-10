<?php
extract($result);
?>
<html>
<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<center> Subject Details[Update]</center>
<table class="table table-bordered" style="width:60%;">
<form action='updateSubject' method='post'>
<input type='hidden' value='<?php echo $sid;?>' name='sid'>


<tr>
<td><b><i>Subject Name:</i></b></td>
<td><input type='text' name='sname' class="form-control" value='<?php echo $sname;?>'>
</td>
</tr>

<tr>
<td><b><i> Semester:</i></b></td>
<td><input type='text' name='sem' class="form-control" value='<?php echo $sem;?>'>
</td>
</tr>

<tr>
<td><b><i> Description:</i></b></td>
<td><input type='text' name='descr' class="form-control" value='<?php echo $descr;?>'>
</td>
</tr>

<tr>
<td><b><i>status:</i></b></td>
<td><input type='text' name='status' class="form-control" value='<?php echo $status;?>'>
</td>
</tr>
<tr>
<td><input type='submit' class="btn btn-info" value='Edit' name='btn'></td>
<td><input type='submit' class="btn btn-danger" value='Delete' name='btn'>
</td>
</tr>
</table><br><br>
</form>

<?php echo $msg; ?>


</html>


