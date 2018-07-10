<?php
extract($result);
?>
<html>
<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<center> Branch Details[Update]</center>
<table class="table table-bordered" style="width:60%;">
<tr>
<td valign='top'>
<form action='updateBranch' method='post'>
<input type='hidden' value='<?php echo $bid;?>' name='bid'>
<table>


<tr>
<td><b><i>Branch Name:</i></b></td>
<td><input type='text' class="form-control" name='bname' value='<?php echo $bname;?>'>
</td>
</tr>

<tr>
<td><b><i>Total Sem:</i></b></td>
<td><input type='text' class="form-control" name='totalsem' value='<?php echo $totalsem;?>'>
</td>
</tr>
<tr>
<td><input type='submit' class="btn btn-info" value='Edit' name='btn'></td>
<td><input type='submit' class="btn btn-danger" value='Delete' name='btn'>
</td>
</tr>
</table>
<br>
<br>
<?php echo $msg; ?>
</form>
</td>
<td valign='top'>
<form action='updateBicon' method='post' enctype='multipart/form-data'>
<input type='hidden' value='<?php echo $bid; ?>' name='bid'>
<img src='/citest/images/branch/<?php echo $bicon;?>' width='100' height='100'><br><br>
<input type='file' class="form-control" name='bicon' value='<?php echo $bicon;?>'><br><br>
<input type='submit' class="btn btn-info" value='Edit Icon' name='btn1'><br><br>
<?php echo $msg;?>
</form>
</td>
</tr>
</table>
</html>


