<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

include("dbcon.php");
$query="insert into contact values('$name','$email','$message')";

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  } 
  

  
  
  ?>
 <script>
 alert("Your feedback is registered successfully ");
 document.location="contact.php";
</script>
<?php 
 mysql_close($con)
?>