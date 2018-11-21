<html>
<head>
<title></title>
</head>
<body>
<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{


$medicine_name=$_POST['mname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$id=$_POST['c_id'];
$name=$_POST['name'];
$exd=$_POST['exd'];
$bno=$_POST['bno'];
$image= "tabs/".$_FILES['img']['name'];
if($_POST['mname'] && (move_uploaded_file($_FILES['img']['tmp_name'],$image)))
{
include("dbcon.php");
$query="insert into medicine values(' ','$medicine_name','$quantity','$price','$id','$image','$exd','$bno')";
}
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }
  else
  { 

  ?>
 
  <script type="text/javascript">
  alert("medicine added successfully ");
   document.location.href="add.php?cid=<?php echo $id; ?> & name=<?php echo $name; ?>";
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