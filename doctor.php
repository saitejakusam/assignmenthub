<!DOCTYPE html>
<html>
<head>
   <title>SAITEJA - 18MIS0360</title>
  <link rel="icon" href="1200px-Open_book_nae_02.svg.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>saiteja</title>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 <style type="text/css">
  *{
margin: 0; padding: 0;
box-sizing: border-box;
font-family: 'Josefin Sans', sans-serif;
overflow-x: hidden;
}

header{
 width: 100%;
 height: 100vh;
 background-image: url(bg4.jpg);
 background-repeat: no-repeat;
 background-size: 100%;
}
.mainheader{
  margin:0px;
 width: 100%;
 height: 150px;
 display: flex;
 justify-content: space-between;
 align-items: center;
}
.mainheader .logo img{
 width: 250px; height: 70px;
 padding-left: 60px;
}
.mainheader nav{
 width: 450px;
 display: flex;
 justify-content: space-around;
 align-items: center;
}

.mainheader nav a{
 text-decoration: none;
 color: black;
 text-transform: uppercase;
}

.menubtn{
 margin-right: 60px;
}
.mainheader button{
 padding: 10px 45px;
 text-align: center;
 font-size: 14px;
 color: #e6e6e6;
 border: none;
 background-image: linear-gradient(to right,#649bff 0%,#0070fa 51%,#649bff 100%);
 border-radius: 10px;
}
.mainheader button:hover{
padding: 10px 45px;
 text-align: center;
 font-size: 14px;
 color:black;
 border: none;
 background-image: linear-gradient(to right,#c6ffb3 0%,#00ffff 51%, #c6ffb3 100%);
 border-radius: 10px;
}
main{
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}

main .right-sec{
 padding-right: 70px;
}

main .left-sec{
 padding-left: 150px;
}

.left-sec h2{
 font-size: 20px;
 text-transform: capitalize;
 font-weight: lighter;
 color: #242424;
 margin-top: 150px;
}

.left-sec h1{
 font-size: 55px;
 text-transform: capitalize;
 font-weight: 700;
 margin: 15px 0;
}

.left-sec p{
 margin-bottom: 20px;
}

.left-sec button{
 padding: 15px 45px;
 text-align: center;
 font-size: 14px;
 color: #fff;
 border: none;
 background-image: linear-gradient(to right,#ff80df,#ff00bf,#ff80df);
 border-radius: 10px;
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ffffff;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropbtn{
  color:black;
  background-color: none;
}
body{
  background-color: #b3ffff;
}
.item{
  text-align:center; 
  padding: 40px; 
  width:80% ;height:333px; 
  color:white;
  background-color:pink;
  margin-left: 10%;
  position: relative;
}
.saiteja{
    position: relative;
    float:right;
    margin-right: 0px;
    margin-bottom: 0px;
    padding: 0px;
    width: 450px
}
div{
  float: left;
}
#col1{
  width:40%;
  background-size: cover;
  background-position: center;
  margin-right: 0%;
  align-items: center;
}
#col2{
  float:right;
  width:40%;
  margin-right: 0px;
  margin-left: 20%;
}
#online{
  margin-bottom: 50px;
  color:black;
}
#not{
  margin-top:10px;
  padding:10px;
  color:black;
  background-color:yellow;
  border-radius: 10px;
  border: 2px solid black;
}
#not:hover{
background-color: black;
color:white;
border: 2px solid white;
}
#s{
  color:white;
  width:100%;
  background-image: url("bg2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  margin-left:none;
  margin-top: 40px;
  padding:15px;
}
#sai{
  color:white;
  background-color: #ccfff5;
  width:100%;
  background-image: url("bg3.jpg");
  background-repeat: no-repeat;
  background-size: cover;
padding:15px;
}
#dong:hover{
-ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.1);
  
}
.glow {
  font-size: 40px;
  color:  #ccffff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}
#para{
  color:black;
  text-align:left;
  text-align:center;
  font-size:30px;
  margin-left: 50px;
  text-decoration: none;
}
#para:hover{
color:blue;
}
#meds{
  margin-left:30%;
  margin-top: 10%;
}
.ding:hover{
  -ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.1);
}
#goo:hover{
  -ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.2);
}
#app:hover{
  -ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
   transform: scale(1.2);
 }
section{
  overflow-y: hidden;
}
div{
  overflow-y: hidden;
}
#fuck{
  margin-left:20px;
}
 #bloody{
      text-decoration: none;
      color:grey;
      font-size: 20px
    }
  #bloody:hover{
      text-decoration: none;
      color:white;
      font-size: 20px
  }
  #mmm:hover{
    color:white;
  }
  #qua:hover{
    color:red;
    cursor: pointer;
  }
 </style>
 <script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
<header style="width:100%">
 <div class="mainheader">
  <div class="logo">
   <img class="sai" src="sss.jpg" style="width:140px;height:auto">
   <h1 style="float: right;margin-top: 30px">Doctor meet</h1>
  </div>

  <nav style="margin-left: 250px;text-shadow: 0 0 3px #6600cc">
   <a class="sai" href="#">home</a>
   <div class="dropdown">
    <a class="dropbtn" style="color:black;background-color: #ffffff border-radius:50%;padding:10px">Help 
      <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-content" style="border-radius: 10px">
      <a href="sai.php">Report a issue</a>
      <a href="sai.php">feedback</a>
      <a href="sai.php">something went wrong</a>
    </div>
  </div> 
   <a href="#">about</a>
   <a href="saiteja.html" target="_blank">contact</a>
  </nav>
  <div class="menubtn">
   <button onclick="document.location='signup.php'" >Sign up</button>
  </div>
 </div>
 <main>
  <section class="left-sec">
   <h2> We Are Here For Your Care</h2>
   <h1>  We, The Best Doctors</h1>
   <p>We are here for your care 24/7. Any help just call us.</p>
   <button style="margin-top:15%" onclick="openWin()"><a href="signup.php" target="_self" style="color:white;text-decoration: none;">Make an appointment</a>
     
   </button>
   
  </section>

  <section class="right-sec">
   <figure>
    <img src="mainbg.jpg">
   </figure>
  </section>
 </main>
</header>
<section style="overflow-y: hidden">
  <div class="item aos-init" data-aos="fade-up" style="width:80%;height:350px;margin-top: 40px;background-image:none;overflow-y: hidden">
    <h1 id="online">
      Book online video visit
    </h1>
    <div class="col1" id="col1" >
     <h2 style="color:black">Video visit with in-network local doctors</h2>
     <br>
     <p>
      Video visits can address immediate medical issues or routine healthcare needs. Doctors are ready to treat a variety of issues or help you with prescriptions or referrals.
    </p>
    <br>
    <button id="not">
      <i class="fa fa-video-camera"></i>
     Book a video visit
   </button>
    </div>
    <div id="col2">
       <img class="saiteja" src="div.jpg">
    </div>
  </div>
</section>
<br>
<br>
<section style="overflow-y: hidden;">
<div id="s" data-aos="zoom-in" style="overflow-y: hidden">
  <img id="dong" src="med.jpg" style="float:left; border: solid 10px transparent">
  <h1 style="float:left;color:black;margin-left: 15px;margin-top: 50px">
    Need medicines? Dont worry we got your back !
  </h1>
  <br>
  <br>
  <br>
  <h2 style="float:left;margin-right:70px;color:blue;margin-top:40px">
    Dont go out for medicines and Healthcare products in<br> this pandemic situation, we got all you need<br>
    <br>
    <br>
    <h2 style="float:left; color:black">Get your required medicines delivered to your doorstep 
    </h2>
    <br>
    <br>
    <br>
    <img src="disc.jpg" style="width:180px;height:180px;float:left;position:absolute">
     <h2  style="color:red;float:left;margin-top: 60px">Use our referral code <br>and get flat 25% off on selected medicines</h2>
    <br>
    </h2>
</div>
<div id="sai" data-aos="zoom-out" style="margin-top: 0px">
  <h1 class="glow" style="margin-top: 40px;text-shadow: 3px 3px 6px red">Order your medicines here !</h1>
<br>
<br>
<div style="overflow-y: hidden">
  <img src="doct.jpg" class="ding" style="height:30%;width:auto;margin-top: 35%">
</div>
<div id="meds">
<a id="para" href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi1767mqc_rAhXEHCsKHVReAQEYABAAGgJzZg&ohost=www.google.com&cid=CAESP-D21h24a_wIbQ0eSpNbzeMAS7UExlIv-Mj9qNh7RF0GRiTQY9D9KXku7Q1scjx1yUAzhCZXgMtRK0Pe_MCO7w&sig=AOD64_0VrLZz4R5lPiZI9_Eh9hcfLx74bw&q&adurl&ved=2ahUKEwiPrabmqc_rAhVXfisKHfj9ByUQ0Qx6BAgOEAE"  target="_blank"
>1)Pharmeasy</a><br>
<br>
<img src="easy.jpg" style="height:150px;width:250px">
  <br>
  <br>
  <a id="para" href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwj7qOeCqs_rAhWVCysKHY3PAxgYABAAGgJzZg&ohost=www.google.com&cid=CAESP-D2rifJro80hUnRRY1yj8eq-otCUOPl6hZf79jKUZrjyA5cNvpTnKgc7EiN2Mdg1D1uKiW33gK8ABwJIDczqQ&sig=AOD64_3sCMQZYs4vsCM1BD0eLrpWJ5IJzA&q&adurl&ved=2ahUKEwjk2N6Cqs_rAhVYfX0KHWpiArsQ0Qx6BAgiEAE" target="_blank">2)Netmeds</a><br>
  <br>
  <img src="net.jpg"  style="height:200px;width:250px">
  <br>
  <br>
<a id="para" href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjF46C8q8_rAhWIfysKHeBkBeMYABAAGgJzZg&ohost=www.google.com&cid=CAESP-D2RShjwt-LZJyXW1MhJRRCpJ9L6lrt2i8XlSytfghjdGNyapOqXn-NA7ZauYUqtVTbKSFQYLwBi09YKkZpmg&sig=AOD64_3YC8flvk47jVdSOYjdm1nBYL1cJg&q&adurl&ved=2ahUKEwikjpq8q8_rAhXo4jgGHfvKDSIQ0Qx6BAgeEAE"  target="_blank">3)Medlife</a>
<br>
<br>
<img src="lif.jpg " style="height:33px;width:auto;margin-left:40px;margin-top: 30px">
  <br>
<br>
<br>
</div>
</div>  
</section>
<section>
  <div data-aos="fade-left" style="background-color:#42429a;;width:100%;height: 50%">
    <img src="doctor.jpg" style="float:right">
    <h1 style="text-align:center;margin-top: 50px;color:white;font-size:40px">
      Get the B-Healthy App
    </h1>
    <br>
    <br>
    <br>
  <ul style="list-style-type:none;margin-left:22%;font-size:25px;color:#66ffff">
  <li><i class="fa fa-star"></i>   Find nearby doctors in your network</li>
  <li><i class="fa fa-star"></i>   Browse doctor reviews by real patients</li>
  <li><i class="fa fa-star"></i>   Book doctor appointments with a tap</li>
  </ul>  
  <br>
  <br>
  <br>
  <a href=https://play.google.com/intl/en_us/badges/ target="_blank">
    <img src="goog.jpg" id="goo" style="width:15%;height:auto;margin-left: 10%">
  </a>
  <a href="https://www.apple.com/in/ios/app-store/" target="_blank">
    <img src="app.jpg" id="app" style="width:15%;height:auto">
  </a>
  </div>
</section>
<section>
<div data-aos="fade-right" style="width:100%;height:300px;margin-top: 50px">
  <h1 style="margin-bottom: 60px">Top specialties on our site :</h1>
<div><p id="qua" style="margin-left:65px">primary care</p><div style="width:150px;height:150px;border-radius: 50%;margin-left: 35px"><img src="1.jpg" style="width:150px;height:150px"></div></div>
<div><p id="qua" style="margin-left:65px">OBGYN</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="2.jpg" style="width:150px;height:150px"></div></div>
<div><p id="qua" style="margin-left:70px">Dentist</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="3.jpg" style="width:150px;height:150px" ></div></div>
<div><p id="qua" style="margin-left:50px">Dermatologist</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="4.jpg" style="width:150px;height:150px"></div></div>
<div><p id="qua" style="margin-left:60px">Psychiatrist</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="5.jpg" style="width:150px;height:150px"></div></div>
<div><p id="qua" style="margin-left:60px">Eye doctor</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="6.jpg" style="width:150px;height:150px"></div></div>
<div><p id="qua" style="margin-left:80px">ENT</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="7.jpg" style="width:150px;height:150px"></div></div>
<div><p id="qua" style="margin-left:50px">Gastroenterologist</p><div style="width:150px;height:auto;border-radius: 50%;margin-left: 25px"><img src="8.jpg" style="width:150px;height:150px"></div></div>
</div>
</section>

<section>
  <div style="background-color: black;color:grey;width:100%;height:auto;text-align:center">
    <footer style="float:bottom">
      <br>
      <br>
      <p id="mmm">
      &#169 Copyright 2020 @B-Healthy.inc
    </p>
      <br>
      <br>
      <a href="#" id="bloody">privacy policy</a><br>
  <a href="sai.php" id="bloody">Contact us</a><br>
  <a href="sai.php" id="bloody">Help</a><br><br>
  <p style="font-size: 20px;color:white
  ">Connect with us on</p><br>
      <i class="fa fa-instagram" id="fuck" style="font-size:33px;color:#ff0066"></i><i class="fa fa-facebook" id="fuck" style="font-size:33px;color:blue"></i><i class="fa fa-twitter" id="fuck" style="font-size:33px;color: skyblue"></i>
    </footer>
  </div>
</section>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script id="rendered-js">
AOS.init({
  duration: 1200 });
    </script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
</body>
</html>

 