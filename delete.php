<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name']))
{
$pid=$_GET['pid'];
$cid=$_GET['id'];
$name=$_GET['name'];

include("dbcon.php");
$query="delete from medicine where pid='$pid'";

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
    ?>
 
  <script type="text/javascript">
   document.location.href="view.php?cid=<?php echo $cid; ?> & name=<?php echo $name; ?>";
 </script>
 <?php
 }
 }
 else
	{
		header("location:pharmacylogin.php");
	}

 
?>
</body>
</html>
?>