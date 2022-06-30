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
<h3> List of Items distributed</h3>

<?php
$allrows=mysqli_query($con,"select * from distribution");
?>
<table border="1">
<tr><td><b>Sl.No.</b></td><td><b>Employee</b></td><td><b>Department</b></td><td><b>Emp. ID</b></td><td><b>Item</b></td><td><b>Quantity</b></td><td><b>Issued on</b></td></tr>
<?php

        while($onerow=mysqli_fetch_array($allrows)){
            //echo "<br>".$onerow[1];
            //$u_id==$onerow[0];
			echo "<tr><td>".$onerow[0]."</td><td>".$onerow[1]."</td><td>".$onerow[2]."</td><td>".$onerow[3]."</td><td>".$onerow[4]."</td><td>".$onerow[5]."</td><td>".$onerow[6]."</td></tr>";
			
            }

?>
</table>
</td>
<!-- mid td end-->
<td class="blank_td_r"></td></tr>
</table>
</center>
</body>
</html>