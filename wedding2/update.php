
<?php
session_start();
include('../../config.php');
	
$id=$_GET['id'];


// Retrieve data from database 
$sql="SELECT * FROM $tbl_users WHERE id='$id'";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
?>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><input name="name" type="text" id="name" value="<? echo $rows['name']; ?>"></td>
<td align="center"><input name="lastname" type="text" id="lastname" value="<? echo $rows['lastname']; ?>" size="15"></td>
<td><input name="email" type="text" id="email" value="<? echo $rows['email']; ?>" size="15"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>"></td>
<td align="center"><input type="submit" name="Submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php

// close connection 
mysql_close();

?>