<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Contact Us</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="PHP/MySQL Contact Form with jQuery" />
        <meta name="keywords" content="contact form, php, mysql, jquery" />
        <link rel="stylesheet" href="css/sty.css" type="text/css" media="screen"/>
        <style>
            a.back{
                width:184px;
                height:32px;
                position:absolute;
                bottom:10px;
                left:10px;
                background:transparent url(back.png) no-repeat top left;
            }
            a.switchstyle{
                width:184px;
                height:32px;
                position:absolute;
                top:10px;
                left:10px;
                background:transparent url(switchstyle.png) no-repeat top left;
            }
        </style>
		<script type="text/javascript">
		function myfun()
		{
		var name=document.getElementById("name").value;
		var email=document.getElementById("email").value;
		var msg=document.getElementById("message").value;
		
		var count=0;
		
		if(name=="")
		{
		alert("please enter the name");
		count=count+1;
		}
		
		else if(email=="")
		{
		alert("please enter your E-mail ID");
		count=count+1;
		}
			
		else if(msg=="")
		{
		alert("please enter your Message");
		count=count+1;
		}
		
		
		if(count>0)
		return false;
		else
		return true;
		
		}
		</script>
		
		
		
		
		
		<?php 
		include("header.php");
		?>
    </head>
    <body>
        <div id="contact">
            <h1>Contact us</h1>
            <form id="ContactForm" action="contactdb.php" method="post" onsubmit="return myfun(this);">
                <p>
                    <label>Name</label>
                    <input id="name" name="name" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
					<span class="error" style="display:none;"></span>
                </p>
                <p>
                    <label>Email</label>
                    <input id="email" name="email" class="inplaceError" maxlength="120" type="text" autocomplete="off"/>
					<span class="error" style="display:none;"></span>
                </p>
                <p>
                    <label>Your message<br /> <span>300 characters allowed</span></label>
                    <textarea id="message" name="message" class="inplaceError" cols="6" rows="5" autocomplete="off"></textarea>
					<span class="error" style="display:none;"></span>
                </p>
                <p class="submit">
                    <input id="send" type="submit" value="Submit"/>
                    <span id="loader" class="loader" style="display:none;"></span>
					<span id="success_message" class="success"></span>
                </p>
				<input id="newcontact" name="newcontact" type="hidden" value="1"></input>
            </form>
        </div>
        
    </body>
</html>