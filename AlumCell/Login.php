<!DOCTYPE html>
<html>
	   

<head>

	<title> Login </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href='Login.css' type="text/css" rel="stylesheet">
	<style>
	*
	{ 
		margin:0px;
	}
	#header
	{ 
		background-color:blue;
		padding-left:200px ; padding-right:200px ; padding-top:15px ; padding-bottom:15px ;
		font-weight:bold ;
		font-family:arial ;
		font-size:150%;
		color:white
	}
	#fillup
	{
		padding-top:230px;
		padding-left:50px;
		float:left ;
		width:300px ;
		color:black;
	}
	#fillup form input
	{ 
		width:350px;
		padding:8px;
		margin-bottom:10px;
		font-size:105% ;
		border-radius:5px;
    }
	#fillup button
	{ 
		width:350px ; height:40px ;
		margin-top:10px ; margin-bottom:10px ;
		font-size:120% ; font-weight:bold ; 
		background-color:#009933 ; border-color:#00CC33 ; color:white ;
		border-radius:5px;
		cursor:pointer;
	}
</style>
</head>

<body>

	<div id ="header">
	<h1> Senior Class Gift 2015 </h1>
	</div>

	<div class = "container-fluid">
	<div class = "col-md-8">
	<div class = "slideshow">
	
		<div class = "image 1">
			<h1> Benches Around 2.2 </h1>
			<img src="image/bench.jpg" style="width:900px;height:500px;">
		</div>
		<div class = "image 2">
			<h1> Art Gallery </h1>
			<img src="image/art.jpg" style="width:900px;height:500px;">
		</div>
		<div class = "image 3">
			<h1> Grand Clock </h1>
			<img src="image/clock.jpg" style="width:900px;height:500px">
		</div>
		<div class = "image 4">
			<h1> Fiction Section </h1>
			<img src="image/library.jpg" style="width:900px;height:500px;">
		</div>
		<div class = "image 5">
			<h1> Recording Studio </h1>
			<img src="image/record.jpg" style="width:900px;height:500px;">
		</div>
		<div class = "image 6">
			<h1> Science Center </h1>
			<img src="image/science.jpg" style="width:900px;height:500px;">
		</div>
		<div class = "image 7">
			<h1> Fountain </h1>
			<img src="image/water.jpg" style="width:900px;height:500px;">
		</div>
	
	</div>
	</div>
	<div id ="fillup">
	 <form method="POST" action="logincompile.php">
	     <input type="text" name="roll" placeholder="Roll No."><br>
	     <input type="password" name="pass" placeholder="Password"><br>
		 <input id="button" type="submit" name="submit" value="Log-In">
	  </form>
	</div>
	
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
	<script>
	
	$(document).ready(function(){
	$(".image").hide();
	$(".image.1").show();
	});
	var next = 1;
	function myFunction(){
		var str = ".image."+next.toString();
		$(str).hide();
		
		var another = next;
		while( next === another )
			next = Math.floor(Math.random()*7)+1;
		console.log(next);
		str = ".image."+next.toString();
		$(str).show();
	};
	setInterval(myFunction, "5000");
	console.log("step1");
	
	</script>
	
</body>

</html>