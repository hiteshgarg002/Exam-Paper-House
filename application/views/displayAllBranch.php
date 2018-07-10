<html>
<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<center><b>Branch Details</b></center>
<table style="width:60%;" cellspacing='2' cellpadding='2' class="table table-bordered">

<tr>
<th>University Id</th>
<th>Branch Name</th>
<th>Total Sem</th>
<th>Update</th>
</tr>
<?php
foreach($result as $row)
{
echo"<tr><td>$row->uid</td><td><u>$row->bname</u><br><img src='/citest/images/branch/$row->bicon' width=60 height=60></td><td>$row->totalsem</td><td><a class='btn btn-info' href=displayByBid?bid=$row->bid>Edit/Delete</a></td></tr>";
}
?>
</table>
</html>