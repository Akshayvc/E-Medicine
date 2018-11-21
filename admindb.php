<html>
<head>
<title>login</title>
</head>
<body>
<?php


include("dbcon.php");


// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password'];


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM admin WHERE uname='$username' and Password='$password'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1)


 {
 session_start();
	$_SESSION['sid']=session_id();
?>
<script>
document.location.href="adhm.php";

</script>

	
	
<?php
}

else 
{

?>
    <script>
alert("invalid username or password");
document.location="adminlogin.php";

</script>
<?php
}

 

?>
</body>
</html>