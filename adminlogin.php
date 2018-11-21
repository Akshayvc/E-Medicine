<!DOCTYPE html>
<html >
  <head>
  
    <meta charset="UTF-8">
    <title>Admin login</title>
    
    
    
    
        <link rel="stylesheet" href="css/stylee.css">
<script type="text/javascript">
function myfun()
{
var username = document.getElementById("Username").value;
var password = document.getElementById("Password").value;

var count=0;
if(username=="")
{
    alert("UserName/Password is empty!");
    count=count+1;
}
else if(password=="")
{
    alert("Password is empty");
    count=count+1;
}
if(count>0)
{
return false;
}
else
return true;
}

</script>

    
    
    
  </head>

  <body>
<?php 
session_start();
	if(isset($_SESSION['sid']))
	{
	?>
 
  <script type="text/javascript">
   document.location.href="adhm.php";
 </script>
 <?php
}
else
{
include("header.php");

?>
    <div class="wrapper">
	<div class="container">
		<h1>Welcome To Admin Login</h1>
		
		<form class="form" action="admindb.php" method="post" onSubmit="return myfun(this);">
			<input type="text" autocomplete="off" id="Username" name="username" placeholder="Username" value="">
			<input type="password" id="Password" name="password" placeholder="Password" value="">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
 

  <?php
  }
  ?>  
    
    
  </body>
</html>
