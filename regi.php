<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/c1.css" />
<link rel="stylesheet" type="text/css" media="all" href="js/jsDatePick_ltr.min.css" />
<script>
    function myfun() 
	{
        
		var oname=document.getElementById("oname").value;
		var lno=document.getElementById("lno").value;
		var pharmacy_name = document.getElementById("Pharmacy_name").value;
		var pregdate = document.getElementById("pregdate").value;
		var c_id = document.getElementById("c_id").value;
		var Email = document.getElementById("Email").value;
		var User_name= document.getElementById("User_name").value;
		var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
		var address=document.getElementById("address").value;
		var city=document.getElementById("city").value;
		var state=document.getElementById("state").value;
		var m_no=document.getElementById("mobile").value;
	
	var count=0;

if(oname=="")
{
alert("please enter your name");
count=count+1;
}


else if(pharmacy_name=="")
{
alert("please enter Pharmacy name");
count=count+1;
}

else if(lno=="")
{
alert("please enter Licence number");
count=count+1;
}
else if(pregdate=="")
{
alert("please select Pharmacy registration date");
count=count+1;
}

else if(c_id=="")
{
alert("please enter your customer ID");
count=count+1;
}

else if(Email=="")
{
alert("please enter your Email ID");
count=count+1;
}


else if(User_name=="")
{
alert("please enter your user name")
count=count+1;
}

else if(pass1=="") {
            alert("Passwords 1 empty!!!");
	    count=count+1;
        }
else if(pass2=="") 
{
            alert("Passwords 2 empty!!!");
	    count=count+1;
        }
else if (pass1 != pass2) 
	{
            alert("Passwords Do not match");
	    count=count+1;        
}
else if(address=="")
{
alert("please enter your address");
count=count+1;
}

else if(city=="")
{
alert("please enter your city");
count=count+1;
}

else if(state=="")
{
alert("please enter your state");
count=count+1;
}

else if(m_no=="")
{
alert("please enter your mobile no");
count=count+1;
}
        
if(count>0)
return false;
else
return true;
    }
</script>


<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"pregdate",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>

<?php
include("dbcon.php");
include("header.php");
$id=mysql_query("select max(cid) from pharmacy_registration");
$row=mysql_fetch_array($id);
$n=$row[0]+1;
?>


</head>
<body>
<h1 style="margin-top: 19px;">Pharmacy Registration</h1>
<form action="data.php" method="post" onSubmit="return myfun(this);">
	<ul>
	
        <li>
        	<label for="name"> Owner Name:</label>
            <input name="oname" type="text" id="oname"  value="">
        </li>
        <li>
		<label for="name">Gender:</label>
        	<input type="radio" name="gender" value="Male" checked="checked">Male
                           
<input type="radio" name="gender" value="Female">Female  </label>
        </li>
		<li>
			<label for="car">Pharmacy Name:</label>
			<input  type="text" name="Pharmacy_name" id="Pharmacy_name"  value="">  
        </li>
		<li>
			<label for="car">Licence Number:</label>
			<input  type="text" name="lno" id="lno"  value="">  
        </li>
        <li>
            <label for="car">Pharmacy Registration Date:</label>
            <input type="text" name="pregdate" id="pregdate" value="" readonly="yes">
        </li>
        <li>
            <label for="car">Customer ID:</label>
			<input type="text"  id="c_id" name="c_id"  value="<?php echo $n;?>"  readonly="yes">
        </li>
		<li>
			<label for="car">Email:</label>
			<input  type="text" name="Email" id="Email"  value="">  
        </li>
        <li>
			<label for="car">User Name:</label>
			<input  type="text" name="User_name" id="User_name"  value="">  
        </li>
        <li>
            	<label for="car">Password:</label>
				<input id="pass1" type="password" name="password" value="" >
			        
	    </li>
        <li>
		 	<label for="car">Confirm Password:</label>
        	<input name="confpass" id="pass2" type="password" value="">
		</li>
		<li>
		<label for="car">Address:</label>
		<textarea name="address" cols="50" rows="5" id="address" value=""></textarea>
		</li>
		<li>
		<label for="car">City:</label>
		<input name="city" type="text" id="city" value="">
		</li>
		<li>
		<label for="car">State:</label>
		<input name="state" type="text" id="state" value="">
		</li>
		<li>
		<label for="car">Mobile No:</label>
		<input name="mobile" type="text" id="mobile" size="12" maxlength="10" value="">
		</li>
	</ul>
    <p>
        <button type="submit" class="action">Register</button>
        <button type="reset" class="right">Reset</button>
    </p>
</form>
</body>
</html>