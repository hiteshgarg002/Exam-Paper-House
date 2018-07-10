<html>
<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<center><b>Subject Details</b></center>
<table  cellspacing='2' cellpadding='2' class="table table-bordered" style="width:60%;">

<tr>
<th>University Id</th>
<th>Branch Id</th>
<th>Subject</th>
<th>Semester</th>
<th>description</th>
<th>Status</th>
<th>Update</th>
</tr>
<?php
foreach($result as $row)
{
echo"<tr><td>$row->suniversity</td><td>$row->sbranch</td><td>$row->sname</td><td>$row->sem</td><td>$row->descr</td><td>$row->status</td><td><a class='btn btn-info' href=displayBySid?sid=$row->sid>Edit/Delete</a></td></tr>";
}
?>
</table>
</html>