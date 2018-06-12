<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<style type="text/css">
	@media screen   and (min-width: 0px) and (max-width: 600px) {
		*{
			margin:0;
			padding: 0;
			word-wrap: break-word;

		}
		body{
			height: 100vh;
			
		}
		.card {
			border-radius: 2%;
			background-attachment: fixed;
			overflow: auto;
			margin:3%;
			margin-top: 4vh;
			margin-bottom: -5%;
			box-shadow:0 2px 4px 0 rgba(0,0,0,0.6),0 3px 10px 0 rgba(0,0,0,0.25);
			/*background-image: url("p.jpg");
			background:linear-gradient(10deg,#EB3349,#FF512F);*/ 
			background:linear-gradient(220deg,#e52d27,#333333); 
			background-repeat: no-repeat;
			background-position:center;
			word-wrap: break-word;
			display: -ms-flexbox;
			
 			display: flex;
  			-ms-flex-direction: column;
     		flex-direction: column;

		}
		.card-body{
			padding: 15%;
			position: relative;
		}
				.form-name,.form-number ,.form-pass{ 
    		width: 100%;
    		font-size:.8rem;
    		height:5vh; 
    		z-index: 1;
    		margin:5px auto;
    		background:transparent;
    		position: relative;   
    		outline: 0;
    		border: none;
    		color:white;
    		border-bottom: 1px solid white;
    	}
		.form-input label{
    			position: relative;
    			top:-4vh;
    			left:5px;
    			font-size: .7rem;
    			font-family:roboto;
    			color: white;
    			transition: all .2s linear;
    		}
    		input[type=number]::-webkit-inner-spin-button, 
    		input[type=number]::-webkit-outer-spin-button { 
		    -webkit-appearance: none;
		    -moz-appearance: none;
		    appearance: none;
		    margin: 0; 
		}
    	.form-name:focus,.form-number:focus ,.form-pass:focus{
    		outline: none;
    		border-width: 1px;
    		border-color:aqua;
    		transition: all.2s ease-out;
    	}
    	.form-name:focus +label, .form-number:focus +label,.form-pass:focus + label{
    		top:-8vh;
    		color:aqua;
    		font-size: .6rem;

    	}
    	.form-name.has-value +label, .form-number.has-value +label ,.form-pass.has-value +label{
    		top:-8vh;
    		color:aqua;
    		font-size: .8rem;
    	}
    	button{
			position: relative;
			width:65%;
			height: 5vh;
			z-index: 100;
			font-size: 1.2rem;
			border:none;
			border-radius: 5px;
			background-color:#e52d27;
			 color: white;
			 box-shadow:0 2px 4px 0 rgba(0,0,0,0.5),0 3px 10px 0 rgba(0,0,0,0.15);
		}
		.button1{
			background:linear-gradient(200deg,#e52d27,#333333); 
		}
		.button1 #a{
			font-size: .8rem;
		}
		input [type="file"]{
			background:hidden;
		}
		#imagePreview {
    width: 80px;
    border:1px solid white;
    height: 80px;

    border-radius: 50%;
    box-shadow:0 2px 4px 0 rgba(0,0,0,0.85),0 3px 10px 0 rgba(0,0,0,0.95);
    background-position: center center;
    background-size: cover;
    
    display: inline-block;
}
 input [type="file"]{
 	color:transparent;
 	 overflow:hidden;
 	 width:0px;
 }

 .side .sidebutton{
 	background-color:white;
 	cursor: pointer;
 	width:7px;
 	float: right;
 	display: inline-block;
 	margin-right:-14vw;
 	 box-shadow:0 2px 4px 0 rgba(0,0,0,0.5),0 3px 10px 0 rgba(0,0,0,0.15);
 	margin-top:-1.4vh;
 	z-index: 100;
 }
 .side .sidebutton label a{
 	display: inline-block;
 	color: white;
 	text-decoration: none;
 	font-size:.8rem;
 }
 .side .sidebutton:hover   {
 	width:100px;
 	background:linear-gradient(220deg,#e52d27,#333333);
 	 box-shadow:0 2px 4px 0 rgba(0,0,0,0.5),0 3px 10px 0 rgba(0,0,0,0.15);
 	transition: all.5s ease-in;
 	transition:  .3s ease-out;
 	z-index: 100;
 }
.sign p{
	margin-left:55vw;
	margin-top:-2.5vh;
	color: white;
	font-family: sans-serif;
	font-size:.8rem;
	z-index: 1;
	position: fixed
} 
	}
	@media screen   and (min-width: 610px){ 
		*{
			margin:0;
			padding: 0;
			word-wrap: break-word;

		}
		body{
			height: 100vh;
			
		}
		.card {
			border-radius: 2%;
			background-attachment: fixed;
			overflow: auto;
			margin:37%;
			margin-top: 4vh;
			margin-bottom: -5%;
			box-shadow:0 2px 4px 0 rgba(0,0,0,0.6),0 3px 10px 0 rgba(0,0,0,0.25);
			/*background-image: url("p.jpg");
			background:linear-gradient(10deg,#EB3349,#FF512F);*/ 
			background:linear-gradient(220deg,#e52d27,#333333); 
			background-repeat: no-repeat;
			background-position:center;
			word-wrap: break-word;
			display: -ms-flexbox;
			
 			display: flex;
  			-ms-flex-direction: column;
     		flex-direction: column;

		}
		.card-body{
			padding: 15%;
			position: relative;
		}
		.form-name,.form-number ,.form-pass{ 
    		width: 100%;
    		font-size:.8rem;
    		height:5vh; 
    		z-index: 1;
    		margin:5px auto;
    		background:transparent;
    		position: relative;   
    		outline: 0;
    		border: none;
    		color:white;
    		border-bottom: 1px solid white;
    	}
		.form-input label{
    			position: relative;
    			top:-4vh;
    			left:5px;
    			font-size: .7rem;
    			font-family:roboto;
    			color: white;
    			transition: all .2s linear;
    		}
    		input[type=number]::-webkit-inner-spin-button, 
    		input[type=number]::-webkit-outer-spin-button { 
		    -webkit-appearance: none;
		    -moz-appearance: none;
		    appearance: none;
		    margin: 0; 
		}
    	.form-name:focus,.form-number:focus ,.form-pass:focus{
    		outline: none;
    		border-width: 1px;
    		border-color:aqua;
    		transition: all.2s ease-out;
    	}
    	.form-name:focus +label, .form-number:focus +label,.form-pass:focus + label{
    		top:-8vh;
    		color:aqua;
    		font-size: .6rem;

    	}
    	.form-name.has-value +label, .form-number.has-value +label ,.form-pass.has-value +label{
    		top:-8vh;
    		color:aqua;
    		font-size: .8rem;
    	}
    	button{
			position: relative;
			width:65%;
			height: 5vh;
			z-index: 100;
			font-size: 1.2rem;
			border:none;
			border-radius: 5px;
			background-color:#e52d27;
			 color: white;
			 box-shadow:0 2px 4px 0 rgba(0,0,0,0.5),0 3px 10px 0 rgba(0,0,0,0.15);
		}
		.button1{
			background:linear-gradient(200deg,#e52d27,#333333); 
		}
		.button1 #a{
			font-size: .8rem;
		}
		input [type="file"]{
			background:hidden;
		}
		#imagePreview {
    width: 80px;
    border:1px solid white;
    height: 80px;

    border-radius: 50%;
    box-shadow:0 2px 4px 0 rgba(0,0,0,0.85),0 3px 10px 0 rgba(0,0,0,0.95);
    background-position: center center;
    background-size: cover;
    
    display: inline-block;
}
 input [type="file"]{
 	color:transparent;
 	 overflow:hidden;
 	 width:0px;
 }

 .side .sidebutton{
 	background-color:white;
 	cursor: pointer;
 	width:7px;
 	float: right;
 	display: inline-block;
 	margin-right:-4vw;
 	 box-shadow:0 2px 4px 0 rgba(0,0,0,0.5),0 3px 10px 0 rgba(0,0,0,0.15);
 	margin-top:-1.4vh;
 	z-index: 100;
 }
 .side .sidebutton label a{
 	display: inline-block;
 	color: white;
 	text-decoration: none;
 	font-size:.8rem;
 }
 .side .sidebutton:hover   {
 	width:100px;
 	background:linear-gradient(220deg,#e52d27,#333333);
 	 box-shadow:0 2px 4px 0 rgba(0,0,0,0.5),0 3px 10px 0 rgba(0,0,0,0.15);
 	transition: all.5s ease-in;
 	transition:  .3s ease-out;
 	z-index: 100;
 }
.sign p{
	margin-left:15vw;
	margin-top:-2.5vh;
	color: white;
	font-family: sans-serif;
	font-size:.8rem;
	z-index: 1;
	position: fixed
} 
}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<script >
		$(function(){
			$('.form-name,.form-number,.form-pass').on('focusout',function(){
				if($(this).val().length>0){
					$(this).addClass('has-value');
				}
				else{
					$(this).removeClass('has-value');

				}
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ 
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
	</script>
	<script type="text/javascript">
					$(document).ready(function(){
						$(".sidebutton").hover(){
							$("label").show();
							$("label").css("font-size:.8rem")
						}
					})
				</script>
</head>
<body>
	
		<div class="card wow fadeInRight" id="card" style="overflow: hidden;">
			<div class="card-body" id="card-body">
				<div class="first">
					<span class="side">
						<button  class="sidebutton" value="login" >
							<label class="log"><a href="/login">login</a></label>
						</button>
					</span>
					<span  class="sign wow fadeInRight" data-wow-delay=".5s">
						<i class="fas fa-angle-left" style="color:white;"></i>
						<p ><b>Sign Up</b></p>
					</span>
					<br>
					<br>
					
					<form class="form1 wow fadeInRight" data-wow-delay=".5s" action="temp.php" method="post">
						<center>
						<div  id="imagePreview">
							<label><input id="uploadFile" type="file" style="background:transparent;overflow:hidden;width: 0%;margin-top:25px;" required/>
							<i style="margin-right:2px;color: white;font-size:25px;opacity:.5" class="fas fa-upload" ></i></label>
						</div></center>
						<br>
						<br>
						<div class="form-input" id="form-input">
			           		<input type="text" id="form-name" name="name" class="form-name " required>
			           		<label for="form-name">user's name</label>
			          	</div><br>
			          	<div class="form-input" id="form-input">
			           		<input type="number" id="form-number"  name="Mob_no" class="form-number " required>
			           		<label for="form-number">mobile </label>
			           	</div><br>
			           	<div class="form-input" id="form-input">
			           		<input type="email" id="form-number"  name="email" class="form-number " required>
			           		<label for="form-number">email</label>
			           	</div><br>
			           	<div class="form-input" class="form-input">
			           		<input type="password" id="form-pass" class="form-pass" required>
		                	<label for="form-pass">password</label>
		                </div>
		                <div class="form-group">
		                	<br>
		                	<center>
		                	<button type="submit" class=" button1"><i id="a" class="fas fa-sign-in-alt"></i></button>
		                </center>
		                </div>
					</form>
				</div>
			</div>

		</div>
	
</body>
</html>