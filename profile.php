<html>
<title>Profile</title>
<head>
 
  <link rel="stylesheet" href="css/styles.css">
  
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 
  <script src="script.js"></script>
   
<title>profile</title>

</head>

<body style="background-image: url(images/43224_1_other_wallpapers_eat_your_medicine.jpg); background-size:cover;">
<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{

include("header1.php");
include("dbcon.php");
$sql="select * from medicine where cid='$cid'";
$result= mysql_query( $sql ) or die('Database Error: ' . mysql_error());
$num=mysql_num_rows($result);


?>
<marquee behavior="alternate" bgcolor="#4CB5E9"><h2 style="color: #333333;"> Welcome <?php echo $name; ?> </h2></marquee>

<h1><font color="#FFFFFF">The total <?php echo $num;?> medicines listed</font></h1>
<?php
}
else
	{
		header("location:pharmacylogin.php");
	}


?>

</body>
</html>
