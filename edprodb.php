<?php 
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{
$cid=$_POST['cid'];
$pn=$_POST['pname'];
$ads=$_POST['ads'];
$city=$_POST['city'];
$state=$_POST['state'];
$mno=$_POST['mno'];

include("dbcon.php");
$query="update pharmacy_registration set pharmacy_name='$pn',Address='$ads',city='$city',state='$state',mno='$mno' where cid='$cid'";
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
    

  ?>
 
  <script type="text/javascript">
   document.location.href="editpro.php?cid=<?php echo $cid; ?> & name=<?php echo $pn; ?>";
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