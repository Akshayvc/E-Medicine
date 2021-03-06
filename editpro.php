<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit profile</title>

<style type="text/css">
.form-style-2{
	max-width: 500px;
	padding: 20px 12px 10px 20px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
	font-weight: bold;
	font-style: italic;
	border-bottom: 2px solid #ddd;
	margin-bottom: 20px;
	font-size: 15px;
	padding-bottom: 3px;
}
.form-style-2 label{
	display: block;
	margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
	width: 100px;
	font-weight: bold;
	float: left;
	padding-top: 8px;
	padding-right: 5px;
}
.form-style-2 span.required{
	color:red;
}

.form-style-2 input.input-field{
	width: 48%;
	
}

.form-style-2 input.input-field,   
 .form-style-2 .select-field{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid #C2C2C2;
	box-shadow: 1px 1px 4px #EBEBEB;
	-moz-box-shadow: 1px 1px 4px #EBEBEB;
	-webkit-box-shadow: 1px 1px 4px #EBEBEB;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	padding: 7px;
	outline: none;
}
.form-style-2 .input-field:focus,   
.form-style-2 .select-field:focus{
	border: 1px solid #0C0;
}

.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
	border: none;
	padding: 8px 15px 8px 15px;
	background: #FF8500;
	color: #fff;
	box-shadow: 1px 1px 4px #DADADA;
	-moz-box-shadow: 1px 1px 4px #DADADA;
	-webkit-box-shadow: 1px 1px 4px #DADADA;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
	background: #EA7B00;
	color: #fff;
}

</style>

</script>

<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"exd",
			dateFormat:"%d-%M-%Y"
		});
	};
</script>

</head>

<body>
<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{

$name=$_GET['name'];
$cid=$_GET['cid'];

include("dbcon.php");
$sql = "select * from pharmacy_registration where cid='$cid'";
$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error());
while($row = mysql_fetch_array( $rs ))
{
$pname=$row[3];
$ads=$row[7];
$city=$row[8];
$state=$row[9];
$mno=$row[10];
}


?>
<script>
function myfun()
{
 var pname= document.getElementById("pname").value;
 var ads= document.getElementById("ads").value;
 var city=document.getElementById("city").value;
 var state=document.getElementById("state").value;
   var mno=document.getElementById("mno").value;


var count=0;
if(pname=="")
{
alert("please enter pharmacy name");
count=count+1;
}

else if(ads=="")
{
alert("please enter the address");
count=count+1;
}

else if(city=="")
{
alert("please enter city");
count=count+1;
}

else if(state=="")
{
alert("please enter state");
count=count+1;
}

else if(mno=="")
{
alert("please enter mobile number");
count=count+1;
}

if(count>0)
return false;
else
return true;
}
</script>

</head>
<?php 
include("header1.php");
?>
<body>
<marquee behavior="alternate" bgcolor="#4CB5E9"><h2>Welcome <?php echo $name; ?></h2></marquee>
<div class="form-style-2">
<div class="form-style-2-heading">Change your information</div>
<form action="edprodb.php" name="myform" method="post" onSubmit="return myfun(this);">
<label for="field1"><span>Pharmacy Name <span class="required">*</span></span><input type="text" class="input-field" name="pname" id="pname" value="<?php echo $pname; ?>" /></label>

<label for="field5"><span>Address <span class="required">*</span></span><input type="text" class="input-field" name="ads" id="ads" value="<?php echo $ads; ?>"></label>
<label for="field2"><span>City<span class="required">*</span></span><input type="text" class="input-field" name="city" id="city" value="<?php echo $city; ?>" /></label>
<label for="field2"><span>State<span class="required">*</span></span><input type="text" class="input-field" name="state" id="state" value="<?php echo $state; ?>" /></label>
<label for="field2"><span>Mobile Number<span class="required">*</span></span><input type="text" class="input-field" name="mno" id="mno" value="<?php echo $mno; ?>" /></label>
<input type="hidden" name="cid" value="<?php echo $cid; ?>">
<label><span>&nbsp;</span><input type="submit" value="Update" /></label>
</form>
</div>
<?php 

}
else
	{
		header("location:pharmacylogin.php");
	}



?>


</body>
</html>
