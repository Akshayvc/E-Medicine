<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{
$pid=$_POST['pi'];
$mname=$_POST['mn'];
$mquantity=$_POST['mq'];
$mprice=$_POST['mp'];
$cid=$_POST['id'];
$name=$_POST['name'];
$exd=$_POST['exd'];
$bno=$_POST['bno'];
include("dbcon.php");
$query="update medicine set medicine_name='$mname',quantity='$mquantity',price='$mprice',expdate='$exd',batchno='$bno' where pid='$pid' and cid='$cid'";
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
    

  ?>
 
  <script type="text/javascript">
  alert("medicine updated successfully ");
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