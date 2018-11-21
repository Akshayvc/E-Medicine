<?php
session_start();
	if($_SESSION['sid']==session_id())
	{
$cid=$_GET['cid'];


include("dbcon.php");
$que="delete from pharmacy where cid='$cid'";

if (!mysql_query($que))
  {
  die('Error: ' . mysql_error());
  }


$query="delete from pharmacy_registration where cid='$cid'";

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
 

  ?>
 
  <script type="text/javascript">
   document.location.href="addel.php?cid=<?php echo $cid; ?>";
 </script>
 <?php
 }
 else
	{
		header("location:adminlogin.php");
	}
 ?>