<script src='/citest/assets/jquery-2.2.1.min.js'></script>
<script src='/citest/assets/university.js'></script>


<html>

<form action='insert' method='post' enctype='multipart/form-data'>
<table>
<caption><b><i>Branch Deatils</i></b></caption>
<tr>
<td><b><i>University Id:</i></b></td>
<td><select id='university' name='uid'></select>
</td>
</tr>



<tr>
<td><b><i>Branch Name:</i></b></td>
<td><input type='text' name='bname'></select>
</td>
</tr>

<tr>
<td><b><i>Branch Icon:</i></b></td>
<td><input type='file' name='bicon'>
</td>
</tr>

<tr>
<td><b><i>Total Sem:</i></b></td>
<td><input type='text' name='totalsem'>
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

