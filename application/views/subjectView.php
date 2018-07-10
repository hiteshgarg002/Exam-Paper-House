<script src='/citest/assets/jquery-2.2.1.min.js'></script>
<script src='/citest/assets/uniBranch.js'></script>

<html>

<form action='insert' method='post'>
<table>
<caption><b><i>Subject Deatils</i></b></caption>
<tr>
<td><b><i>University Id:</i></b></td>
<td><select id='university' name='uid'>
</td>
</tr>

<tr>
<td><b><i>Branch Id:</i></b></td>
<td><select id='branch' name='bid'>
</td>
</tr>

<tr>
<td><b><i>Semester:</i></b></td>
<td><select name="sem" id='sem'></select>
</td>
</tr>


<tr>
<td><b><i>Subject Name:</i></b></td>
<td><input type='text' name='sname'>
</td>
</tr>


<tr>
<td><b><i>Description:</i></b></td>
<td><input type='text' name='descr'>
</td>
</tr>

<tr>
<td><b><i>Status</i></b>
<input type="radio" name="status" value="Theory" checked> Theory
  <input type="radio" name="status" value="Practical"> Practical<br>

</td>
</tr>


<tr>
<td><input type='submit'></td>
<td><input type='reset'>
</td>
</tr>

</table>
<br>
<br>
<?php echo $msg; ?>
</form>

</html>

