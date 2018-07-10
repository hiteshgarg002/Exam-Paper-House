<html>
<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<center> <br> List Of Universities </b></center>
<table  cellspacing='2' cellpadding='2' class="table table-bordered" style="width:60%;">

<tr>
<th>University</th>
<th>Address</th>
<th>Contact</th>
<th>Contact<br> Person</th>
<th>Contact<br>Details</th>
<th>Description</th>
<th>Update</th>
</tr>
<?php
foreach($result as $row)
{
echo"<tr><td><img class='img-thumbnail' src='/citest/images/university/$row->logo' width=60 height=60><br>$row->uname</td><td>$row->addr<br>$row->ustate<br>$row->ucity<br>Pincode: $row->pin</td><td>$row->contact</td><td>Mobile: $row->mobile<br> Landline: $row->landline Email: $row->email</td><td>$row->desc</td><td><a class='btn btn-info' href=displayById?uid=$row->uid>Edit/Delete</a></td></tr>";

}
?>
</table>
</html>
