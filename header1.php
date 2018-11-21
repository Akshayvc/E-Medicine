<!doctype html>

<html lang=''>

<head>
  
 <meta charset='utf-8'>
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="css/styles.css">
  
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 
  <script src="script.js"></script>

<title>profile</title>
</head>
<?php
 
$cid=$_GET['cid']; 
$name=$_GET['name'];
?>
<body>
<div id='cssmenu'>

<ul style="margin-top: 10px;" background="medi.jpg"> 
<li class='last'><a href="profile.php?cid=<?php echo $cid; ?> & name=<?php echo $name; ?>"><span>Home</span></a></li>
 <li><a href="add.php?cid=<?php echo $cid; ?> & name=<?php echo $name; ?>">
<span>Add Medicines</span></a></li>

   <li>
<a href="view.php?cid=<?php echo $cid; ?> & name=<?php echo $name; ?>"><span>View Medicines</span></a></li>
<li><a href="editpro.php?cid=<?php echo $cid; ?> & name=<?php echo $name; ?>"><span>Edit Profile</span></a></li>   
<li class='last'><a href='signout.php'><span>Sign out</span>
</a>
</li>

</ul>

</div>

</body>

<html>
