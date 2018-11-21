<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{
$pid=$_POST['pi'];
$name=$_POST['name'];
$cid=$_POST['id'];

$image= "tabs/".$_FILES['image']['name'];
if($_POST['pi'] && (move_uploaded_file($_FILES['image']['tmp_name'],$image)))
{
include("dbcon.php");
$query="update medicine set image='$image' where pid='$pid' and cid='$cid'";
}
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  { 

  ?>
 
  <script type="text/javascript">
   document.location.href="update.php?cid=<?php echo $cid; ?> & name=<?php echo $name; ?> & pid=<?php echo $pid; ?>";
 </script>
 <?php
} 
}

else
	{
		header("location:pharmacylogin.php");
	}


?>