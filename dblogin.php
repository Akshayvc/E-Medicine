<html>
<head>
<title>login</title>
</head>
<body>
<?php

include("dbcon.php");


// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['pass'];


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sq="SELECT * FROM pharmacy WHERE username='$username' and password='$password' and flag='Allow'";
$res=mysql_query($sq);
$rows=mysql_fetch_array($res);
$cid=$rows[0];

$sql="SELECT * FROM pharmacy_registration WHERE cid='$cid'";
$result=mysql_query($sql);



// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1)
{ 


$id="select cid,pharmacy_name from pharmacy_registration  where cid='$cid'";
$iid=mysql_query($id);
$row=mysql_fetch_array($iid);
$n=$row[0];
$pname=$row[1];

session_start();
$_SESSION['id']=$row['cid'];
$_SESSION['name']=$row['pharmacy_name'];
?>
<script>
document.location.href="profile.php?cid=<?php echo $n; ?> & name=<?php echo $pname; ?>";

</script>

	
	
<?php
}
 
else 
{

?>
    <script>
alert("invalid username or password");
document.location="pharmacylogin.php";

</script>
<?php
}

?>
</body>
</html>