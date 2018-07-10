  <script src='/citest/assets/jquery-2.2.1.min.js'></script>
  <script src="/citest/assets/semester.js"></script>
<html>
<body>
<form action="paperInsert" method="POST">
<table border=0>
<caption>Paper Details</caption>
<tr><td>University ID:</td><td><select id="university" name="university"></select></td></tr>
<tr><td>Branch Name:</td><td><select id="branch" name="branch"></select></td></tr>

<tr><td>Sem:</td><td><select id="sem" name="sem"></select></td></tr>
<tr><td>Subject:</td><td><select id="subject" name="sid"></select></td></tr>
<tr><td>Year:</td><td><input type="text" name="year"></td></tr>
<tr><td>Unit:</td><td><input type="text" name="unit"></td></tr>
<tr><td>Question No.:</td><td><input type="text" name="qno"></td></tr>
<tr><td>Question 1:</td><td><input type="text" name="q1"></td></tr>
<tr><td>Question 2:</td><td><input type="text" name="q2"></td></tr>




<tr><td><input type="submit">&nbsp;&nbsp;<input type="reset"></td></tr>
</table>
</form>
<?php echo $msg;?>
</body>
</html>