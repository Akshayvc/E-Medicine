<html>
<head>
<title></title>
<style type="text/css">
table.two {									 
	margin-bottom: 3em;	
	border-collapse:collapse;
	display: inline-block;
	margin-right: 3em;		}	

	
	table.two td {								
	text-align: center;     
	width: 14em;
	border: 0.1em #c2c2c2 solid;					
	padding: 1em; 		}		


	table.two th {								
	text-align: center;					
	padding: 1em;
	background-color: black;			
	color: white;		}			      

	table.two tr {	
	height: 1em;	}
</style>
</head>
<body>
<?php
include("dbcon.php");
$nm=$_POST['name'];
$name = mysql_real_escape_string( $nm);
include("header.php");
if( empty( $name )){
?>
	<script> alert("Please enter the medicine name!!!");
	document.location="home.php";
	</script>
	<?PHP
}
else{
	$sql = "select * from medicine where medicine_name like '$name%' and quantity>0 and DATE(expdate)>=DATE(now())";
	$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error());
	$num = mysql_num_rows( $rs );
	
	if($num >= 1 ){
	
	
	echo "<center>";
	echo "<table class='two'>";
	echo "<hr color='green'>";
	echo"<marquee behavior='alternate' bgcolor='orange'><h2><font color='white'>Medicines List</font></h2></marquee>";
	echo "<hr color='green'>";
	echo"<tr bgcolor='#6699FF'><th>Medician name</th><th>Quantity</th><th>Price</th><th>Image</th><th>Expired Date</th><th>Batch No</th><th>Details</th</tr>";
	
	
		while($row = mysql_fetch_array( $rs ))
		{
    echo"<tr>";
    echo"<td>$row[1]<br></td>";
	echo"<td>$row[2] strips<br></td>";  
    echo"<td>1 strips(10 tabs)=Rs.$row[3]<br></td>";
	echo"<td><img src='$row[5]' height='50' width='50'><br></td>";
	echo"<td>$row[6]<br></td>";
	echo"<td>$row[7]<br></td>";
	echo"<td><a href='detail.php?id=$row[4]'><input type='button' value='show'></a></td>";
	echo"</tr>";
		}
		    echo"</table>";
	echo "</center>";
	}
	
	else
	{
	$s = "select * from medicine where medicine_name like '$name%' ";
	$r = mysql_query( $s ) or die('Database Error: ' . mysql_error());
	$n = mysql_num_rows( $r );
	if($n >= 1 )
	{
	?>
	<script> alert("You Entered medicine is Expired");
	document.location="home.php";
	</script>
	<?PHP
	}

	
	else
	{
	?>
	<script> alert("You Entered medicine is not found");
	document.location="home.php";
	</script>
	<?PHP
		
	}
	}
}


?>
</body>
</html>