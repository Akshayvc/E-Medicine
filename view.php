<html>
<head>
<title>view</title>
</head>
<style type="text/css">
table.one {									 
	margin-bottom: 3em;	
	border-collapse:collapse;
	display: inline-block;
	margin-right: 0em;		}	

	
	table.one td {								
	text-align: center;     
	width: 10em;					
	padding: 1em; 		}		


	table.one th {								
	text-align: center;					
	padding: 1em;
	background-color: #e8503a;			
	color: white;		}			      

	table.one tr {	
	height: 1em;	}

	table.one tr:nth-child(even) {			
    background-color: #eee;		}

	table.one tr:nth-child(odd) {			
	background-color:#fff;		
</style>
<?php
session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['name']))
	{
 
$cid=$_GET['cid']; 
$name=$_GET['name'];

include("header1.php");
?>
<body>
<marquee behavior="alternate" bgcolor="#4CB5E9"><h2> Welcome <?php echo $name; ?> </h2></marquee>
<?php
include("dbcon.php");
$sql = "select * from medicine where cid='$cid'";
	
	$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error());
	$num = mysql_num_rows( $rs );
	
	if($num >= 1 ){
	
	
	echo "<center>";
	echo "<table class='one'>";
	echo"<tr><th>Product ID</th><th>Medician name</th><th>Quantity</th><th>Price</th><th>image</th><th>Expired Date</th><th>Batch No</th><th>Edit</th><th>Delete</th></tr>";
	
	
		while($row = mysql_fetch_array( $rs ))
		{
    echo"<tr>";
    echo"<td>$row[0]<br></td>";
	echo"<td>$row[1]<br></td>";  
    echo"<td>$row[2]<br></td>";
 echo"<td>$row[3]<br></td>";
 echo"<td><img src='$row[5]' width='50' height='50'><br></td>";
 echo"<td>$row[6]<br></td>";
   echo"<td>$row[7]<br></td>";
	echo"<td><a href='update.php?name=$name & pid=$row[0] & cid=$cid'><img src='images/google-updating-1371646685.gif' height='60' width='60' /></a></td>";
	echo"<td><a href='delete.php?pid=$row[0] & name=$name & id=$row[4]'><img src='images/delete.png' height='50' width='50' /></a></td>";
	echo"</tr>";
		}
		    echo"</table>";
	echo "</center>";
	}
	
	}
	else
	{
		header("location:pharmacylogin.php");
	}
	
	?>	
	</body>
	</html>