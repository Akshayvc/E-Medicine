<html>
<head>
<title></title>
<style type="text/css">
table.three {									 
	margin-bottom: 3em;	
	border-collapse:collapse;
	display: inline-block;
	margin-right: 3em;		}	

	
	table.three td {								
	text-align: left;     
	width: 10em;
	border: 0.1em #c2c2c2 solid;					
	padding: 1em; 
	background-color: #fff79a;		}		


	table.three th {								
	text-align: left;					
	padding: 1em;
	border: 0.1em #c2c2c2 solid;
	background-color: #e7e7e7;			
	color: black;		}			      

	table.three tr {	
	height: 0.8em;	}
</style>
</head>

<body>
<?php
$cid=$_GET['id'];
include("header.php");
include("dbcon.php");
$sql="select * from pharmacy_registration where cid='$cid'";
$rs=mysql_query($sql) or die('Database Error: ' . mysql_error());
$num=mysql_num_rows($rs);

if($num >= 1 )
{
	
	
	echo "<center>";
	echo "<table class='three'>";
	echo"<marquee behavior='alternate' bgcolor='purple'><h1><font color='white'>Pharmacy List</font></h1></marquee>";
	echo"<hr color='blue'>";
	echo"<tr><th>Owner name</th><th>Pharmacy Name</th><th>E-Mail ID</th><th>Address</th><th>City</th><th>State</th><th>Mobile number</th</tr>";
	
	
while($row = mysql_fetch_array( $rs )){
    echo"<tr>"; 
    echo"<td><font size='4'>$row[0]</font><br></td>";
	echo"<td><font size='4'>$row[3]</font><br></td>";
	echo"<td><font size='4'>$row[6]</font><br></td>";
	echo"<td><font size='4'>$row[7]</font><br></td>";  
    echo"<td><font size='4'>$row[8]</font><br></td>";
	echo"<td><font size='4'>$row[9]</font><br></td>";
	echo"<td><font size='4'>$row[10]</font><br></td>";
	echo"</tr>";
		}
		    echo"</table>";
	echo "</center>";
	}
?>
</body>
</html>