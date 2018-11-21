<html>
<head>
<title>Doctor_Reg</title>
<style>
.singleBorder{
    border:1px #d6d6d6 solid;
    background-color:#f6f6f6;
}
.singleBorder td{
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:14px;
    font-weight:bold;
    color:#333333;
}
.singleBorder input,select{
    border:1px #aaaacc solid;
    font-family:tahoma;
    font-size:14px;
    font-weight:normal;
    padding:2px;
    background-color:#FFFFFF;
}
.singleBorder input:focus{  /* doesn't work in IE 5,6 */
    border:1px #aaaacc solid;
    font-family:tahoma;
    font-size:14px;
    font-weight:normal;
    padding:2px;
    background-color:#FFFF99;
}
.points{
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:14px;
    color:#999999;
    font-weight:normal;
    padding:30px;
}
.formHeading{
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:22px;
    font-weight:bold;
    color:#0066CC;
    padding:10px;
    text-shadow:#FF3333 .2em .2em .2em; 
}

</style>
 function myFunction() 
	{
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
		var name = document.getElementById("name").value;
		var dob = document.getElementById("bdate").value;
		var c_id = document.getElementById("c_id").value;
		var User_name= document.getElementById("User_name").value;
		var address=document.getElementById("address").value;
		var city=document.getElementById("city").value;
		var m_no=document.getElementById("mobile").value;
	var count=0;

if(name=="")
{
alert("please enter your name");
count=count+1;
}
else if(dob=="")
{
alert("please enter your DOB");
count=count+1;
}

else if(c_id=="")
{
alert("please enter your customer ID");
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
else if(m_no=="")
{
alert("please enter your mobile no");
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

<?php 
include("header.php");
?>

</head>

<body>
 <form method="post" onSubmit="return myfun(this);" action="dbdoct.php">
    <table width="1340px" border="0" cellpadding="2px" cellspacing="1px">
        <tr>
            <td width="2px"></td>
            <td>
		<center>
                <div class="formHeading"> Registration Form </div>
		</center><hr/>
                <table width="100%" border="0" cellpadding="4px" class="singleBorder" cellspacing="8">
                    <tr>
                        <td colspan="2">
                            <table width="100%">
                                <tr>
                                    <td>
                <div class="points">
                   
                    <p style="font-weight:bold; color:#000000">
                    Please note: If you are already registered with us, don't create another account, go to home page
                    and login to access your acccount                    </p>
                </div>                                    </td>
                                </tr>
                            </table>                        </td>
                    </tr><br />
                    <tr>
                        <td align="right" width="130px">
                        <div align="left"> Name:</div></td>
                        <td><input type="text" name="name" id="name" value="" /></td>
                    </tr>
					<tr>
                        <td align="right">
                            <div align="left">C_ID:</div></td>
							
                        <td><input type="text" name="C_id" id="C_id" value="" /></td>
                    </tr>
				
					
                    
						
	   <tr>
                        <td align="right" >
                        <div align="left">Gender:</div></td>
                        <td>
                            <input type="radio" name="gender" value="male" checked="checked"/>Male
                            <input type="radio" name="gender" value="female"/>Female</td>
                    </tr>               
                   
	<tr>	
                        <td align="right">
			<div align="left">D.O.B</div></td>
                       <td><input type="text" name="dob" id="dob" size="10" placeholder="YYYY-MM-DD" /></td>
                    </tr>
					
                    <tr>
                        <td align="right">
                        <div align="left">User name</div></td>
                        <td><input type="text" name="user name" id="user name" size="40" placeholder="User name" /></td>
                    </tr>
					
					
                    <tr>
                        <td align="right">
                        <div align="left">Password:</div></td>
                        <td><input type="password" name="password" id="password" size="40" /></td>
                    </tr>      
					
	<tr>
                        <td align="right">
                        <div align="left">Confirm Password:</div></td>
                        <td><input type="password" name="con_password" id="con_password" size="40" /></td>
                    </tr>
<tr> <tr>
                        <td align="right">
                            <div align="left">Address:</div></td>
							
                        <td><input type="text" name="address" id="address" size="40" /></td>
                    </tr>
					
					<tr>
                        <td align="right">
                            <div align="left">City:</div></td>
						<td>
						<select name="city" id="city">
						<option value="">--Select--</option>
  						<option value="Hubli">Hubli</option>
  						<option value="Dharwad">Dharwad</option>
  						
						</select>
                    </tr>             
                    					
	<tr>
                        <td align="right">
                            <div align="left">Phone No:</div></td>
	          <td><input type="text" name="p_no" id="p_no" size="13" maxlength="13" /></td>
                    </tr>
					
	
					
                    <tr>
                       <td>
                            
                         <div align="right">
                           <input type="submit" value="Submit" />                        
                         </div></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
           
