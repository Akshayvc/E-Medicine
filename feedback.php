<html>
<head>
<title>Feedbacks</title>
<link rel="stylesheet" href="css/fb_table.css">
</head>
<body>
<hr />
<marquee behavior="scroll" bgcolor="black"><h1><font color="#FFFFFF"> welcome to Admin</font></h1></marquee>
<hr />

<?php
session_start();
	if($_SESSION['sid']==session_id())
	{
include("header2.php");
include("dbcon.php");

$sql = "SELECT * FROM contact";
	
	$rs = mysql_query( $sql ) or die('Database Error: ' . mysql_error());
	$num = mysql_num_rows( $rs );
	
	if($num >= 1 )
	{
	echo "<br>";
	echo"<thead>";
	echo "<table id='rounded-corner'>";
	echo "<tr><th>owner Name</th><th>Email</th><th>Message</th><th>Delete</th></tr>";
	echo"</thead>";
	
		while($row = mysql_fetch_array( $rs ))
		{
		echo"<tbody>";
    echo"<tr>";
    echo"<td>$row[0]<br></td>";
	echo"<td>$row[1]<br></td>";  
    echo"<td>$row[2]<br></td>";
	echo"<td><a href='feeddb.php?em=$row[1]'><img src='images/list_delete.png' width=40 height=40></a></td>";
	echo"</tr>";
	echo"<tbody>";
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