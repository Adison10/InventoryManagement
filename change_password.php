<?php session_start(); 
include "database_connect.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IM Change Password</title>

<script>
function validateform(){
if(document.form1.cp.value==""){alert("Current Password cannot be blank !");return false;}
if(document.form1.np.value==""){alert("New Password cannot be blank !"); return false;}
return true;
}
</script>
</head>

<body><center>
<!-- outermost table, first row is in "head.php" -->
<table width="90%" border="0" cellspacing="0" cellpadding="0">
<?php include "head.php"; ?> <!-- it contains one <tr>...</tr> -->
   
<tr><td class="blank_td_l"></td><!-- this td will show shadded vertical line -->
    <td align="center"><!-------------- mid td starts, it will contain all the major parts ------------>
        <!-- inner table starts-->
        <table>
        <tr><td align="left"><h3>Please submit Current and New password</h3>
                <form action="" name="form1" method="post" onSubmit="return validateform();">
                <!-- this inner-inner table will contain Login part -->
                <table><tr>
                    <td class="label">Current Password*:</td><td><input class="tf1" type="password" id="cp"  name="cp"  placeholder="Enter current password " /></td></tr>
                <tr>
                  <td class="label">New Password*:</td><td>
                <input class="tf1" type="password" id="np"  name="np" placeholder="Enter new password"/></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="Submit" name="Login" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel"></td></tr>
                </table>
                <!-- inner-inner table that contains Login part ends-->
                </form>
            </td>
            <td align="center" style="border-left:solid; padding-left:10px;">
            </td>
        </tr>
        </table>
        <!-- inner table ends-->  
        <?php
        if(isset($_POST['Login'])){
        $cp=$_POST['cp']; $cp=md5($cp);
        $np=$_POST['np']; $np=md5($np);
		$u_id=$_SESSION['u_id'];
        //echo("passed u_id=".$u_id);
        $s_f=0;
        //mysqli_select_db($con,"meira");
        $allrows=mysqli_query($con,"select * from users");
        while($onerow=mysqli_fetch_array($allrows)){
            //echo "<br>".$onerow[0].",".$onerow[1];
            if($u_id==$onerow['user_name'] && $cp==$onerow['password']){
                $s_f=1; 
                break;
                }
            }
        if($s_f==1){
			//current password entered is correct for the user available in session. So update the password.
			//echo "update usersnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
            $updres=mysqli_query($con,"update users set password='$np' where user_name='$u_id'");
			//echo "update users set upass='$np' where uid='$u_id'";
			if($updres>0){
            echo "<font color='green'>Password changed successfully.</font>";
			
            }else{
            echo "<font color='red'>Password change failed. Please try again.</font>";
                }
		}else{//if s_f==1 ends
		echo "<font color='red'>Current Password is incorrect. Please try again.</font>";
            
		}
		}
               ?>
               
    </td>
    <!-- mid td end-->
	<td class="blank_td_r"></td></tr>
</table></center>
</body>
</html>