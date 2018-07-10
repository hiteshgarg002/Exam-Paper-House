<html>
<form action='calc_interest'>
<table border="1">
<tr>
<td><b>Amount:</b></td>
<td><input type='text' name='amt' ></td>
</tr>

<tr>
<td><b>Rate:</b></td>
<td><input type='text' name='rate' value='<?php echo $rate;?>'></td>
</tr>

<tr>
<td><b>Time:</b></td>
<td><input type='text' name='time' value='<?php echo $time;?>'></td>
</tr>


<tr>
<td><input type='submit' value='Interest'></td>
<td><input type='reset'></td>
</tr>

</table><br><br>
Interest Amount:<br>
<b><?php echo $msg; ?></b>

</form>
</html>
