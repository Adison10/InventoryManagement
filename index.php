<?php session_start(); 
include "database_connect.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory Management</title>
<body style="background-color:#b2c0ddbc">
<style> header {text-align:center;}
</style>
</head>
<header> INVENTORY MANAGEMENT </header><br><br />
<body>
<center>
<form method="post" name="LoginForm" action="">
<table>
<tr><td>ID:</td><td><input type="text" name="uid" /></td></tr>
<tr><td>Password:</td><td><input type="password" name="upass" /></td></tr>
<tr><td></td><td><input type="submit" value="Login" name="Login" /></td></tr>
</table>
</form>
</center>


<?php
if(isset($_POST['Login'])){
        $u_id=$_POST['uid'];
        $u_p=$_POST['upass']; $u_p=md5($u_p);
        echo("Entered u_id=".$u_id."<br>");
		
		$s_f=0;
        //mysqli_select_db($con,"meira");
        $allrows=mysqli_query($con,"select * from users");
        while($onerow=mysqli_fetch_array($allrows)){
            //echo "<br>".$onerow[1];
            if($u_id==$onerow[1] && $u_p==$onerow[3]){
                $s_f=1; 
                break;
                }
            }
        if($s_f==1){
            $_SESSION['u_id']=$u_id;
			//echo "Login successful. Your password is ".$onerow[3]." its unencrypted value is ".$_POST['upass'];
			if($u_id=="admin"){ header("location:Admin.php");} 
			else {//welcome.php is common for all except admin and filing
					header("location:welcome.php");
					}//else ends			
			
		}
		else{
			echo "Login failed";
			}
		
}

?>
</body>
</body>
</html>