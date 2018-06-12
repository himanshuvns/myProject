<!DOCTYPE html>
<html>
<head>
	<title>food delivery</title>
	<link rel="shortcut icon" href="pizza.jpg">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		.card
  		{
  			box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.15);
  			width:72vw;
  			height:50vh;
  			margin-top:25vh;
  			margin-bottom: 20vh;
  			position: relative;
  			background-color: white;
  			border-radius: 8px;
  		}
  		.a1
  		{
  			background-repeat: no-repeat;
  			background-size: cover;
  			opacity: 0.9;
  		}
  		.button {
  			border-radius: 4px;
  			background-color: orange;
  			border: none;
  			color: #FFFFFF;
  			text-align: center;
  			font-size: 22px;
  			padding: 5px;
  			width: 100px;
  			transition: all 0.5s;
  			cursor: pointer;
  			margin: 5px;
		}

		.button span 
		{
 			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
		}

		.button span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
		}

		.button:hover span 
		{
 			padding-right: 25px;
		}

		.button:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}
		.login .btn
		{
			box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.15);
    		position: absolute;
    		top: 8%;
    		left: 77%;
    		transform: translate(-50%, -50%);
    		-ms-transform: translate(-50%, -50%);
    		background-color: #555;
    		color: black;
    		font-size: 16px;
    		padding: 12px 24px;
    		border: none;
    		cursor: pointer;
    		border-radius: 5px;
    		text-align: center;
    		opacity: 0.8;
		}
		.login .btn:hover 
		{
    		background-color: black;
    		color: white;
		}
		.create_account .btn
		{
			box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.15);
    		position: absolute;
    		top: 8%;
    		left: 90%;
    		transform: translate(-50%, -50%);
    		-ms-transform: translate(-50%, -50%);
    		background-color: #555;
    		color: black;
    		font-size: 16px;
    		padding: 12px 24px;
    		border: none;
    		cursor: pointer;
    		border-radius: 5px;
    		text-align: center;
    		opacity: 0.8;
		}
		.create_account .btn:hover 
		{
    		background-color: black;
    		color:white;
		}
		.get_app img:hover
		{
			box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.45);
		}

  </style>

</head>
<body  background="food1.jpg" class="a1">
	<div class="login">
		<button class="btn" >
			<span class="glyphicon glyphicon-log-in">
			 </span>&nbsp;&nbsp;
			 <a href="/login"><b>Log In</b></a>
		</button>
	</div>	
	<div class="create_account">
		<button class="btn" >
			<span class="glyphicon glyphicon-user">
			 </span>&nbsp;&nbsp;
			 <a href="/signup"><b>Create an account</b></a>
		</button>
	</div>
	<center>
	<div class="card">
		<div style="position: absolute;top: 8vh;left: 2.5vw;">
			<h1 style="font-size: 42px;font-family: sans-serif;">
				<b>Late night at office</b>
			</h1>
		 </div>
		<div style="position: absolute;top: 15vh;left: 2.5vw;">
			<h2 style="font-family: sans-serif;color: darkgrey;">Order food from favourite restaurants near you.
			 </h2>
		</div>

		<div class="container" style="float: left;">
  			<form class="form-inline" action="">
  				<div class="input-group" style="top: 25vh; left: -7vw;height: 7vh;" >
      				<span class="input-group-addon">
      					<i class="glyphicon glyphicon-map-marker" style="color: black; font-size: 20px;"></i>
      				</span>
                	<div class="dropdown">
    					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 120px;font-size: 20px;background-color: white;color: black;border-radius:0px;height: 7vh;">City
    						<span class="caret"></span>
    				 	</button>
    					<ul class="dropdown-menu">
      						<li><a href="#">Varanasi</a></li>
      						<li><a href="#">Jalandhar</a></li>
      						<li><a href="#">Phagwara</a></li>
      						<li><a href="#">Lucknow</a></li>
      						<li><a href="#">Noida</a></li>
      						<li><a href="#">Ludhiana</a></li>
      						<li><a href="#">Agra</a></li>
      						<li><a href="#">Mumbai</a></li>
      						<li><a href="#">Bhadohi</a></li>
    					</ul>
  					</div>
    			</div>
    			<div class="input-group" style="top: 25vh;left: -6.5vw;height: 7vh;">
      				<span class="input-group-addon">
      					<i class="glyphicon glyphicon-search" style="color: black;font-size: 20px;">
      					</i>
      				</span>
      				<input id="msg" type="text" class="form-control" name="msg" placeholder="Search for restaurants and cuisines..." size="70" style="height: 7vh;"	 required>
    			</div>
    			<div class="input-group" style="top: 25vh;left: -6.5vw;">
    				<button class="button" style="height: 7vh; width:10vw;">
    					<span>Search </span>
    				</button>
				</div>
 			</form>
		</div>
	</div>
	</center>
		<div class="get_app" style="top: 82vh;position: absolute;left: 40vw;">
			<a href="">
				<img src="app_store.png" alt="app_store" height="45px" width="120px" style="opacity:1;">
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="">
				<img src="google1.png" alt="app_store" height="45px" width="120px" style="opacity: 1">
			</a>
		</div>
</body>
</html>