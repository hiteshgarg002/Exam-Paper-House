<html>
<form action ='calc_sal'>
<table border=1>
<tr>
<td>Emp ID:</td>
<td><input type='text' name='eid'></td>
</tr>

<tr>
<td>Emp Name:</td>
<td><input type='text' name='ename'></td>
</tr>

<tr>
<td>Basic Salary:</td>
<td><input type='text' name='basic'></td>
</tr>

<tr>
<td>Grade:</td>
<td><select name='grade'>
<option value='None'>None</option>
<option value='grade1'>Grade 1</option>
<option value='grade2'>Grade 2</option>
<option value='grade3'>Grade 3</option>
</td>
</tr></table><br><br>
<input type ='submit'>
<input type ='reset'><br><br>
<b><?php echo $result; ?> </b>

</form>

<html>