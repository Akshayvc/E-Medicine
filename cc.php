<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	
	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$("#formLeft .input-bg").hover(function() {
			$(this).addClass("active");
		}, function() {
			$(this).removeClass("active");
		});
		
		$("#formLeft input").focus(function() {
			$(this).parent().addClass("active");
		});
		$("#formLeft input").blur(function() {
			$("#formLeft .input-bg").removeClass("active");
		});
		
		$("#formRight .message-bg").hover(function() {
			$(this).addClass("active");
		}, function() {
			$(this).removeClass("active");
		});
		
		$("#formRight textarea").focus(function() {
			$(this).parent().addClass("active");
		});
		$("#formRight textarea").blur(function() {
			$("#formRight .message-bg").removeClass("active");
		});
		
		$("#commentForm").validate();
	});
	</script>
</head>

<body>

	<div id="page-wrap">
	
		<form method="post" action="contactengine.php" id="commentForm">
			<fieldset>
			<div id="formLeft">
			
				<label for="Name">Name:</label>
				<div class="input-bg">
					<input type="text" name="Name" id="Name" class="required" minlength="2" />
				</div>
				
				<label for="City">City:</label>
				<div class="input-bg">
					<input type="text" name="City" id="City" class="required" minlength="2" />
				</div>
				
				<label for="Email">Email:</label>
				<div class="input-bg">
					<input type="text" name="Email" id="Email" class="required email" />
				</div>
				
			</div>
			
			<div id="formRight">
				<label for="Message">Message:</label></td>
				<div class="message-bg">
					<textarea name="Message" id="Message" rows="20" cols="20" class="required"></textarea>
				</div>
				<br />
				<input type="image" src="images/send-button.jpg" name="submit" value="Submit" class="submit-button" />
			</div>
			
			<div class="clear"></div>
			</fieldset>
		</form>
	
	</div>
	
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-68528-29";
	urchinTracker();
	</script>

</body>

</html>