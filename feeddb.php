<?php
session_start();
	if($_SESSION['sid']==session_id())
	{
$email=$_GET['em'];


include("dbcon.php");
$query="delete from contact where email='$email'";

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
    

  ?>
 
  <script type="text/javascript">
   document.location.href="feedback.php";
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