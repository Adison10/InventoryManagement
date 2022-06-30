<style>
.blank_td_l{ background:url(images/left_td.jpg); min-width:5px; max-width:5px;}
.blank_td_r{ background:url(images/right_td.jpg); min-width:5px;  max-width:5px;}
.header_footer{ background-color:#ccc; color:#FFF; text-align:center}
.label{ background-color:#333; color:#FFF; padding:6px; border-radius:3px;}
.a_label{ background-color:#393; color:#FFF; padding:6px; border-radius:3px;}
.r_label{ background-color:#393; color:#FFF; padding:6px; border-radius:3px;}
.tf{background-color:#ded; color:#333; padding:6px; border-radius:3px;}
.tf1{background-color:#ecc; color:#333; padding:6px; border-radius:3px;}
</style>
<!--header & logo -->
<tr class="header_footer" height="60" ><td class="blank_td_l"></td>
<!-- mid td start-->
	  <td><table width="90%"><tr><td width="99%" align="left"><img src="images/CU.jpg" height="100" width="34%"/></td>
	  <td width="1%" colspan="2"><div style="position:absolute; right:450px; top:50px;">
      <font size="+3" color="#f22">INVENTORY MANAGEMENT</font></div>   
      
      
	  <div style="position:absolute; top:70px; right:200px"><?php if(isset($_SESSION['u_id'])){echo "<a href='change_password.php' style='color:green; '>Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo "<a href='logout.php' style='color:red; '>LOGOUT</a>"; }?></div></td></tr></table></td>
<!-- mid td end-->
      <td class="blank_td_r"></td></tr>
      