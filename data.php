<html>
<body>
<?php
$oname=$_POST['oname'];
$lno=$_POST['lno'];
$gender=$_POST['gender'];
$pname=$_POST['Pharmacy_name'];
$pregd=$_POST['pregdate'];
$c_id=$_POST['c_id'];
$email=$_POST['Email'];
$u_name=$_POST['User_name'];
$pass=$_POST['password'];
$ads=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$m_no=$_POST['mobile'];

include("dbcon.php");
$query="insert into pharmacy_registration values('$oname','$lno','$gender','$pname','$pregd','$c_id','$email','$ads','$city','$state','$m_no')";

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  } 
  
  $que="insert into pharmacy values('$c_id','$u_name','$pass','Allow')";

if (!mysql_query($que))
  {
  die('Error: ' . mysql_error());
  } 
  
  
  
  ?>
 <script>
 alert("you registered successfull please login"); 
document.location="pharmacylogin.php";
</script>
<?php 
 mysql_close($con)
?>
</body>
</html>




