<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Add medicines</title>
	
 <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
 <link rel="stylesheet" href="css/style5.css">
 <link rel="stylesheet" type="text/css" media="all" href="js/jsDatePick_ltr.min.css" />
 <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"exd",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>

<script>
function myfun()
{
 var mname= document.getElementById("mname").value;
 var mquantity= document.getElementById("quantity").value;
 var mprice=document.getElementById("price").value;
 var image=document.getElementById("img").value;
   var exd=document.getElementById("exd").value;
    var bno=document.getElementById("bno").value;

var count=0;
if(mname=="")
{
alert("please enter your medicine name");
count=count+1;
}

else if(mquantity=="")
{
alert("please enter your Quantity");
count=count+1;
}

else if(mprice=="")
{
alert("please enter your price");
count=count+1;
}

else if(image=="")
{
alert("please select image");
count=count+1;
}

else if(exd=="")
{
alert("please enter expired date");
count=count+1;
}

else if(bno=="")
{
alert("please enter batch number");
count=count+1;
}

if(count>0)
return false;
else
return true;
}
</script>
</head>
 <body style="background-image: url(images/ayurveda_.jpg); background-size:cover;">
     
	 
	 <?php
	 session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{
	 
	 
 include("header1.php");
$cid=$_GET['cid']; 
$name=$_GET['name'];

?> 
<marquee behavior="alternate" bgcolor="#4CB5E9"><h2> Welcome <?php echo $name; ?> </h2></marquee><br><br>
    <div class="login-card">
    <h1>Add Medicines</h1><br>
 <form action="add_db.php" method="post" enctype="multipart/form-data" onSubmit="return myfun(this);">
    <input type="text"  name="mname" id="mname" placeholder="Medicine Name" value="">
	<input type="text" name="quantity" id="quantity" placeholder="Medicine quantity" value="">
	<input type="text"  name="price" id="price" placeholder="Price" value="">
	<input type="file" name="img" id="img" placeholder="choose file" value="" style="background: rgb(63, 175, 206) none repeat scroll 0% 0%;width: -moz-available;padding-bottom: 15px;padding-top: 15px;background: gainsboro;"><br><br>
<input type="text"  name="exd" id="exd" placeholder="Expired Date" readonly="yes" value="">
<input type="text"  name="bno" id="bno" placeholder="Batch Number" value="">
	<input type="hidden" name="c_id" id="c_id" value="<?php echo $cid; ?>" >
<input type="hidden" name="name" id="name" value="<?php echo $name; ?>" ><br><br><br><br>
    <input type="submit" name="login" class="login login-submit" value="Submit">
</form>
    
 <?php 
 }
 else
	{
		header("location:pharmacylogin.php");
	}
 
 
 ?> 

    
    
    
    
  </body>
</html>
