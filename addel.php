<?php
session_start();
	if($_SESSION['sid']==session_id())
	{ 
$cid=$_GET['cid'];


include("dbcon.php");
$query="delete from medicine where cid='$cid'";

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
    

  ?>
 
  <script type="text/javascript">
   document.location.href="admin.php";
 </script>
 <?php
 }
 }
 
 else
	{
		header("location:adminlogin.php");
	}
?>
</body>
</html>
?>