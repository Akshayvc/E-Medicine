<?php 
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{
	?>
 
  <script type="text/javascript">
   document.location.href="profile.php?cid=<?php echo $_SESSION['id']; ?> & name=<?php echo $_SESSION['name']; ?>";
 </script>
 <?php
}
else
{
?>
<!DOCTYPE html>

<html lang="en">


<head>
<title>Pharmacy Login</title>
<script type="text/javascript">
function myfun()
{
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

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
	

	
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">

	

</head>


<body>
<?php
include("header.php");
?>

<div class="container">
		
<div class="top">

			
<h1 id="title" class="hidden"><span id="logo">PHARMACY<span></span></span></h1>
		</div>
		
<div class="login-box animated fadeInUp">
			
<div class="box-header">
				
<h2>Log In</h2>
<form action="dblogin.php" method="post" onSubmit="return myfun(this);">		
</div>
			
<label for="username">Username</label>
			
<br/>
			
<input type="text" id="username" name="username" autocomplete="off" value="">
			
<br/>
			
<label for="password">Password</label>
			
<br/>
			
<input type="password" id="password" name="pass" value="">
			
<br/>

</br>
<button type="submit">Sign In</button>
</form>		

		
</div>
	
</div>

</body>


<script>
	$(document).ready(function () {
    	
$('#logo').addClass('animated fadeInDown');
    	
$("input:text:visible:first").focus();
	});
	
$('#username').focus(function() {
		
$('label[for="username"]').addClass('selected');
	
});
	
$('#username').blur(function() 
{
		
$('label[for="username"]').removeClass('selected');
	
}
);
	
$('#password').focus(function() 
{
		
$('label[for="password"]').addClass('selected');
	
});
	
$('#password').blur(function() 
{
		
$('label[for="password"]').removeClass('selected');
	
});

</script>
<?php 
}
?>

</html>