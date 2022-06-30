<?php session_start(); 
if(!isset($_SESSION['u_id'])){header('location:index.php');}
include "database_connect.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distribution</title>

<script>

</script>
</head>

<body>
<center>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
<?php include "head.php"; ?>      
<tr><td class="blank_td"></td>
<!-- mid td start-->
<td align="center">
<h3>Welcome <font color="#009966" size="+2"><?php echo $_SESSION['u_id'];?></font>. </h3>
<form action="" name="form1" method="post" onsubmit=" return validateform();">
<table>
<tr>
  <td class="label">E_name*</td><td><input class="tf" type="text" name="name" /></td></tr>
<tr>
  <td class="label">Department*</td><td><input class="tf" type="text" name="dprtmnt" /></td></tr>
<tr>
  <td class="label">ID_no*</td><td><input class="tf" type="text" name="e_id" /></td></tr>
  <tr>
  <td class="label">Item*</td><td><input class="tf" type="text" name="item" /></td></tr>
  
<tr>
  <td class="label">Quantity*</td><td><input class="tf" type="text" name="qty" /></td></tr>
  

<tr><td colspan="2"><input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Cancel" /></td></tr>
</table></form>
<?php
if(isset($_POST['Submit'])){
$name=$_POST['name'];
$dprtmnt=$_POST['dprtmnt'];
$eid=$_POST['e_id'];
$item=$_POST['item'];
$qty=$_POST['qty'];

if($name=='' || $dprtmnt==''|| $eid=='' || $item=='' || $qty=='' ){ echo"<font color='#FF0000'>Please fill all the fields!</font>";}
else{

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s');

$chk=mysqli_query($con,"insert into Distribution(E_name, Department, ID_no, Item, Quantity, Date_of_issue) values('$name','$dprtmnt','$eid','$item','$qty','$date')");
//echo "insert into Distribution(E_name, Department, ID_no, Item, Quantity, Date_of_issue) values('$name','$dprtmnt','$eid','$item','$qty','$date')";
if($chk>0)
	echo "ID_no <font color='#009966' size='+2'>".$eid."</font> with Item <font color='#009966' size='+2'>".$item."</font> successfully saved.";
	else
	echo "Entry failed. Please try again.";
	
}
}?>
</td>
<!-- mid td end-->
<td class="blank_td_r"></td></tr>
</table>
</center>
</body>
</html>