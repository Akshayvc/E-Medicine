<html>
<head>
<title>Update medicine</title>
<style>
label.text
{
font-size: 20px;
color: brown;

}

input.in
{
border-radius: 2em;
    border-top-left-radius: 2em;
    border-top-right-radius: 2em;
    border-bottom-right-radius: 2em;
    border-bottom-left-radius: 2em;
border-color: rgb(28, 43, 206);
font-size: medium;
padding: 10px;
background-color: rgb(219, 242, 239);
}

input.s
{
    padding: 11px;
    border-radius: 3em;
    color: white;
    background-color: rgb(94, 139, 246);
}

input.imgb
{
padding: 10px;
border-radius: 3em;
color: #FFF;
background: #B97D5C none repeat scroll 0% 0%;
font-size: 15px;
}
input.img
{
font-size: 16px;
color: rgb(255, 253, 253);
background: grey none repeat scroll 0% 0%;
}

</style>
</head>
<body>

<link rel="stylesheet" type="text/css" media="all" href="js/jsDatePick_ltr.min.css" />
<script>
    function myFunction() 
	{
        var name = document.getElementById("mn").value;
        var mq = document.getElementById("mq").value;
		var mp = document.getElementById("mp").value;
		var exd = document.getElementById("exd").value;
		var bno = document.getElementById("bno").value;
		var img = document.getElementById("image").value;
		var count=0;

if(name=="")
{
alert("please enter medicine name");
count=count+1;
}
else if(mq=="")
{
alert("please enter medicine quantity");
count=count+1;
}

else if(mp=="")
{
alert("please enter medicine price");
count=count+1;
}

else if(exd=="")
{
alert("please select Expired date")
count=count+1;
}

else if(bno=="") {
            alert("Please enter batch number");
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


<script>
function myfun()
{
var img = document.getElementById("image").value;
var ct=0;

if(img=="") 
{
alert("Please select image");
ct=ct+1;
}
	
if(ct>0)
{
return false;
}
else
return true;
    }

</script>

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

</head>

<body>
<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{

include("header1.php");
$name=$_GET['name'];
$pid=$_GET['pid'];

include("dbcon.php");
$sql = "select * from medicine where pid='$pid'";
$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error());
while($row = mysql_fetch_array( $rs ))
{
$mna=$row[1];
$mqq=$row[2];
$mpp=$row[3];
$cid=$row[4];
$img=$row[5];
$exd=$row[6];
$bno=$row[7];
}


?>
<marquee behavior="alternate" bgcolor="#4CB5E9"><h2>Welcome <?php echo $name; ?> </h2></marquee>

<center>
<h3>image</h3>&nbsp;<img src="<?php echo $img; ?>" align="middle" width="100" height="100">
<form action="ped.php" method="post" enctype="multipart/form-data" onSubmit="return myfun(this);">
<input type="hidden" name="pi" id="pi" value="<?php echo $pid; ?>"><br><br>
<input type="hidden" name="id" id="id" value="<?php echo $cid; ?>">
<input type="hidden" name="name" id="name" value="<?php echo $name; ?>"><br><br>
<input type="file" class="img" name="image" id="image" value="">
<input type="submit" class="imgb" value="edit image">
</form>

<form action="updb.php" method="POST" onSubmit="return myFunction(this);">
<input type="hidden" name="name" id="name" value="<?php echo $name; ?>"><br><br>

<input type="hidden" name="pi" id="pi" value="<?php echo $pid; ?>"><br><br>


<label class="text">Medicine Name:</label>&nbsp;&nbsp; <input type="text" class="in" name="mn" id="mn" value="<?php echo $mna; ?>"><br><br>
<label class="text">Quantity:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="in" name="mq" id="mq" value="<?php echo $mqq; ?>"><br><br>
<label class="text">Price:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="in" name="mp" id="mp" value="<?php echo $mpp; ?>"><br><br>
<label class="text">Expired Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="in" name="exd" id="exd" value="<?php echo $exd; ?>" readonly="yes"><br><br>
<label class="text">Batch Number:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="in" name="bno" id="bno" value="<?php echo $bno; ?>"><br><br>
<input type="hidden" name="id" id="id" value="<?php echo $cid; ?>">



<input type="submit" class="s" value="UPDATE">
</form>
</center>

<?php
}
else
	{
		header("location:pharmacylogin.php");
	}

?>

</body>
</html>