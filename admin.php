<?php session_start(); 
if(!isset($_SESSION['u_id'])){header('location:index.php');}
include "database_connect.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
<h3>Welcome <font color="#009966" size="+2"><?php echo $_SESSION['u_id'];?></font>. <br>Add new purchase information.</h3>
<form action="" name="form1" method="post" onsubmit=" return validateform();">
<table>
<tr>
  <td class="label">Item*</td><td><input class="tf" type="text" name="item" /></td></tr>
<tr>
  <td class="label">Quantity*</td><td><input class="tf" type="text" name="qty" /></td></tr>
<tr>
  <td class="label">Purchase Order No.*</td><td><input class="tf" type="text" name="PO_no" /></td></tr>
  <tr>
  <td class="label">Receipt Date*</td><td><input class="tf" type="text" name="R_date" /></td></tr>
  
<tr>
  <td class="label">Remark*</td><td><input class="tf" type="text" name="remark" style="height:50px; width:280px" /></td></tr>
  <tr>
  <td colspan="2"><font color="#FF0000">Please do not use the special character (') <b>single quote</b> in any of the fields above.</font></td></tr>

<tr><td colspan="2"><input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Cancel" /></td></tr>
</table></form>
<?php
if(isset($_POST['Submit'])){
$item=$_POST['item'];
$qty=$_POST['qty'];
$PO_no=$_POST['PO_no'];
$R_date=$_POST['R_date'];
$remark=$_POST['remark'];

if($item=='' || $qty==''|| $PO_no=='' || $R_date=='' || $remark==''){ echo"<font color='#FF0000'>Please fill all the fields!</font>";}
else{

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s');
$chk=mysqli_query($con,"insert into items(item, qty, po_no, r_date, remark) values('$item','$qty','$PO_no','$R_date','$remark')");
echo "insert into items values('$item','$qty','$PO_no','$R_date','$remark')";
if($chk>0)
	echo "Item <font color='#009966' size='+2'>".$item."</font> with quantity <font color='#009966' size='+2'>".$qty."</font> successfully saved.";
	else
	echo "Entry failed. Please try again.";
	
}
}?>
</td>
<!-- mid td end-->
<td class="blank_td_r"></td></tr>
</table>
<br>
For performing <font color="#00FF00"> Distribution</font>  <a href="distribution.php">Click Here</a>.
<br>
For viewing the<font color="#00FF00"> List of items distributed</font>  <a href="view.php">Click Here</a>.

</center>
</body>
</html>