<html>
<head>
<title>Manage</title>
<link rel="stylesheet" href="css/ad_table.css" type="text/css" >
</head>
<body>
<hr />
<marquee behavior="scroll" bgcolor="black"><h1><font color="#FFFBF0"> welcome to Admin</font></h1></marquee>
<hr />

<?php
session_start();
	if($_SESSION['sid']==session_id())
	{ 
include("header2.php");
include("dbcon.php");

$sql = "SELECT * FROM pharmacy_registration pr, pharmacy p WHERE pr.cid = p.cid";
	
	$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error());
	$num = mysql_num_rows( $rs );
	
	if($num >= 1 )
	{
	echo "<br>";
	
	
	echo "<table id='rounded-corner'>";
	echo "<thead>";
	echo"<tr><th>Owner Name</th><th>Pharmacy name</th><th>Pharmacy Registartion Date</th><th>Customer ID</th><th>E-Mail</th><th>Address</th><th>City</th><th>State</th><th>Mobile no</th><th>Status</th><th colspan='2'>Permission</th><th>Delete Medicines</th><th>Remove user</th></tr>";
	echo "</thead>";
	
		while($row = mysql_fetch_array( $rs ))
		{
    echo "<tbody>";
	echo"<tr>";
	echo"<td>$row[0]<br></td>";
    echo"<td>$row[3]<br></td>";
 echo"<td>$row[4]<br></td>";
 echo"<td>$row[5]<br></td>";
 echo"<td>$row[6]<br></td>";
 echo"<td>$row[7]<br></td>";
 echo"<td>$row[8]<br></td>";
 echo"<td>$row[9]<br></td>";
 echo"<td>$row[10]<br></td>";
 echo"<td>$row[14]<br></td>";
echo"<td><form action='adset.php' method='post'><input type='hidden' name='cid' value='$row[5]'><select name='status'><option value='Allow'>Allow</option><option value='Block'>Block</select></td>";
echo"<td><input type='submit' value='set'></td>";
echo"</form>";
echo"<td><a href='addel.php?cid=$row[5]'><img src='images/remove.PNG' height=40 width=40></a></td>";
echo"<td><a href='adusd.php?cid=$row[5]'><img src='images/mypc_delete.png' width=40 height=40 /></a></td>";
	echo"</tr>";
	echo "<tbody>";
		}
		    echo"</table>";
	
	}
	}

	else
	{
		header("location:adminlogin.php");
	}

	
	
	?>	

</body>
</html>