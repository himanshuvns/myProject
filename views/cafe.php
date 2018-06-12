<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body 
    {
      margin: 0;
      font-size: 28px;
    }

    .header 
    {
      font-size: 15px;
      text-align: center;
      height: 29px;
      width: 100%;
      background-color:#BA1E2B;
      color:white;
      z-index: 1000;
    }

    #navbar 
    {
      position: fixed;
      background-color: #CB202D;
      top: 4vh;
      z-index: 100;
    }
    .content 
    {
      padding: 16px;
    }


    a:link, a:visited 
    {
      background-color: #BA1E2B;
      color: white;
      padding: 4px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-family: serif;
    }

    a:hover, a:active 
    {
      background-color: #D94148;
      color: white;
    }
    button:hover
    {
      box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.15);
      background-color: #D94148;
    }

    .zoom  
    {
      padding: 0px;
      background-color: green;
      transition:all 0.2s ;
      width: 350px;
      height: 250px;
      margin: 0 auto;
    }

    .zoom:hover 
    {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(1.05); 
    }

  </style>
</head>
<body>
  <div class="header" style="position: fixed;">
   <a href="default.asp" target="_blank" style="position: absolute;top: 0vh;left: 85vw;">Product for Businesses
   </a>
   <a href="default.asp" target="_blank" style="position: absolute;top: 0vh;left: 78vw;">We're hiring
   </a> 
  </div>
  <div id="navbar" style="height: 65px;width: 100%;">
    <div class="input-group" style="top: 2vh;left: 15vw;height: 4vh;width: 40vw;">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-search" style="color: black;font-size: 15px;height: 0vh;">
        </i>
      </span>
      <input id="msg" type="text" class="form-control" name="msg" placeholder="Search for restaurants and cuisines..." style="height: 6.5vh;width:30vw;border-radius: 2px;"  required>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-default" style="position: absolute;top: 0vh;left: 34vw; height: 6.5vh;width: 6vw;font-weight: bold;font-size:17px;background-color: #CB202D;color: white;">Search
        </button>
        <button type="button" id="bt1" class="btn btn-default" style="position: absolute;top: 0vh;left: 69vw; height: 6vh;width: 14vw;font-size:17px;background-color: #CB202D;color: white;">
          <span class="glyphicon glyphicon-user">
          </span>&nbsp;&nbsp;Create an account
        </button>
        <button type="button" class="btn" style="position: absolute;top: 0vh;left: 61vw; height: 6vh;width: 7vw;font-size:17px;background-color: #CB202D;color: white;">
          <span class="glyphicon glyphicon-log-in">
          </span>&nbsp;&nbsp;Log In
        </button>
    </div>
  </div>
  <div class="content" style="background-color: #F3F3F3;">
    <div style="height: 15vh;width: 100%;background-color: #F3F3F3;">
    </div>
    <div style="height: 50vh;width: 100%;background-color: #222222;">
      <div class="zoom" style="position: absolute;top: 23vh;left: 4.5vw;">
        <img src="img1.jpg" style="height: 255px;width: 385px;">
      </div>
      <br><br>
      <div class="zoom" style="position: absolute;top: 23vh;left: 36vw;">
        <img src="img2.jpg" style="height: 255px;width: 380px;">
      </div>
      <br><br>
      <div class="zoom" style="position: absolute;top: 23vh;left: 67vw;">
        <img src="img4.jpg" style="height: 255px;width: 380px;">
      </div>
    </div>
    <div style="height: 12vh;width: 100%;background-color: #F3F3F3;">
      <h1 style="position: absolute;top: 70vh;left: 3vw;font-family: verdana;">Breakfast in Varanasi</h1>
    </div>
    <div  style="height: 188vh;width: 20%;background-color:#222222; ;position: absolute;top: 81.5vh;left: 3vw;border-radius: 6px;">
      <h3 style="color: white;position: absolute;top: 2vh;left: 1vw;">filters</h3>




    </div>
    <div  style="height: 45vh;width: 40%;background-color:#222222; ;position: absolute;top: 81.5vh;left: 24vw;border-radius: 6px;padding: 10px;">
      <img src="hotel1.jpg" height="120px" width="150px" style="border-radius: 5px;">
      <h4 style="color: #AAAAAA;position: absolute;top: 2vh;left: 13vw;font-family: times;">casual dining</h4>
      <h2 style="color: #028900;position: absolute;top: 3.5vh;left: 13vw;font-weight: bold;">Green Leaf</h2>
      <h5 style="color: white;position: absolute;top: 10vh;left: 13vw;">4th Floor, Khinvasara Goldplex, Opposite Akashwani, Jalnadhar</h5>
      <hr><div>description</div>
      <div>himanshu</div>
      <hr>
      <span style="background-color: #9ACD32;position: absolute;top: 2vh;left: 36vw;color: white;border-radius: 4px;height: 30px;width: 30px;font-size: 19px;text-align: center;">3.5</span>


    </div>
    <div  style="height: 45vh;width: 40%;background-color:#222222; ;position: absolute;top: 129vh;left: 24vw;border-radius: 6px;padding: 10px;" >
      <img src="hotel5.jpg" height="120px" width="150px" style="border-radius: 5px;">
      <h4 style="color: #AAAAAA;position: absolute;top: 2vh;left: 13vw;font-family: times;">casual dining</h4>
      <h2 style="color: #028900;position: absolute;top: 3.5vh;left: 13vw;font-weight: bold;">Green Leaf</h2>
      <h5 style="color: white;position: absolute;top: 10vh;left: 13vw;">4th Floor, Khinvasara Goldplex, Opposite Akashwani, Jalnadhar</h5>
      <hr><div>description</div>
      <div>himanshu</div>
      <hr>
      <button type="button" class="btn" style=" height: 3vh;width: 20vw;font-size:10px;background-color: #222222;color: white;">
          
          Call
        </button>
      <span style="background-color: #9ACD32;position: absolute;top: 2vh;left: 36vw;color: white;border-radius: 4px;height: 30px;width: 30px;font-size: 19px;text-align: center;">3.5</span>
    </div>
    <div  style="height: 45vh;width: 40%;background-color:#222222; ;position: absolute;top: 176.5vh;left: 24vw;border-radius: 6px;padding: 10px;">
      <img src="hotel3.jpg" height="120px" width="150px" style="border-radius: 5px;">
      <h4 style="color: #AAAAAA;position: absolute;top: 2vh;left: 13vw;font-family: times;">casual dining</h4>
      <h2 style="color: #028900;position: absolute;top: 3.5vh;left: 13vw;font-weight: bold;">Green Leaf</h2>
      <h5 style="color: white;position: absolute;top: 10vh;left: 13vw;">4th Floor, Khinvasara Goldplex, Opposite Akashwani, Jalnadhar</h5>
      <hr><div>description</div>
      <hr>
      <span style="background-color: #9ACD32;position: absolute;top: 2vh;left: 36vw;color: white;border-radius: 4px;height: 30px;width: 30px;font-size: 19px;text-align: center;">3.5</span>
    </div>
    <div  style="height: 45vh;width: 40%;background-color:#222222; ;position: absolute;top: 224.5vh;left: 24vw;border-radius: 6px;padding: 10px;">
      <img src="hotel4.jpg" height="120px" width="150px" style="border-radius: 5px;">
      <h4 style="color: #AAAAAA;position: absolute;top: 2vh;left: 13vw;font-family: times;">casual dining</h4>
      <h2 style="color: #028900;position: absolute;top: 3.5vh;left: 13vw;font-weight: bold;">Green Leaf</h2>
      <h5 style="color: white;position: absolute;top: 10vh;left: 13vw;">4th Floor, Khinvasara Goldplex, Opposite Akashwani, Jalnadhar</h5>
      <hr><div>description</div>
      <hr>
      <span style="background-color: #9ACD32;position: absolute;top: 2vh;left: 36vw;color: white;border-radius: 4px;height: 30px;width: 30px;font-size: 19px;text-align: center;">3.5</span>
    </div>
  </div>

<!--<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
-->
</body>
</html>