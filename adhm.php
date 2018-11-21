<html>
<head>
<title>welcome to admin</title>
<body>
<hr />
<marquee behavior="scroll" bgcolor="black"><font color="#FFFBF0"><h1> welcome to Admin</h1></font></marquee>
<hr />
<?php
session_start();
	if($_SESSION['sid']==session_id())
	{ 
include("header2.php");
include("dbcon.php");
$sql="select * from pharmacy_registration";
$result= mysql_query( $sql ) or die('Database Error: ' . mysql_error());
$num=mysql_num_rows($result);
?>
<h1> The total  <?php echo "$num"; ?> pharmaciests are registered</h1>

<?php 
}
 else
	{
		header("location:adminlogin.php");
	}

?>


</body>
</html>