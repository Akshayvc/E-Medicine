<html>
<head>
<title>search</title>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<?php
include("header.php");
?>
<style type="text/css">
	body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:480px;
		padding:9px;
		display:none;
		margin-top:-2px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:0px #999 ;
		font-size:15px; 
		height:15px;
	}
	.show:hover
	{
		background:skyblue;
		color:#FFF;
		cursor:pointer;
	}
</style>
</head>

<body>

<div>
	<img src="images/emedicine.png"  style="margin-left: 539px; margin-top: 30px;"/>
</div>
<form action="result.php" method="post">
<div class="content">
<input type="text" class="search" autocomplete="off" name="name" id="searchid" placeholder="Search for Medicines" style="margin-left: 189px; margin-top: 65px;"/>
<input type="submit" value="Search" id="search-btn" style="padding: 9px;" >
<div id="result" style="margin-left: 189px;">
</div>
</div>
</form>
</body>
</html>
