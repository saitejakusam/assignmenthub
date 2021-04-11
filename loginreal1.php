
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sandhya";
$conn = mysqli_connect($servername, $username, $password,$dbname);
session_start();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:loginreal1.php");
       }
       else
       {
            $query="select * from signup where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                header('location:DOCTOR2.php');
            }
            else
            {
            	?>
    	<script>
    		alert("enter valid credentials");
    	</script>
       <?php
                header('location:loginreal1.php');
            }
       }
    }
    else
    {
    	
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>SAITEJA - 18MIS0360</title>
	 <link rel="icon" href="blue.jpg" type="image/gif" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		* {
  margin: 0;
  padding: 0;
}
		body{
			background-color:skyblue;
			background-image: url('vader4.jpg');
			background-repeat: none;
			background-size:cover;
			font-family: 'Josefin Sans';
			overflow-x: hidden

		}
		#sai{
			width:60%;
			height:380px;
			position: center;
			margin-top: 8%;
			padding:15px;
			margin-left:20%;
			background-color: white;
			border-radius: 15px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			background-image: linear-gradient(to right,#e6fffa,#66ffe0,#e6fffa);
			margin-bottom: 40px;
			
		}
        #teja{
        	width:350px;
        	height: 350px;
        	background-image: url('sss.jpg');
        	background-size: cover;
            float:left;
		}
		#ammu{
			width:350px;
			height: 360px;
			float:left;
			margin-top: 40px;
			padding: 10px;
			margin-left: 10px;
			border-radius: 15px;
			
		}
		a{
			text-decoration: none;
			color:grey;
		}
		a:hover{
			text-decoration: none;
			color:white;
		}
		i{
			margin-left: 8px;
		}
		#kk{
			margin-right: 10px;
			padding: 10px;
		}
	</style>
	<script language="javascript">

function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide valid email address and password');
    email.focus;
    return false;
 }
}

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
</head>
<body>
	<form method="POST">
	<div style="background-color:  #ccff33;top:0;padding: 15px;width: 100%;margin-left: 0px;">
		<h1 style="margin-left: 20px;float: left;margin-top: 5px">Saiteja</h1>
		<img src="sss.jpg" style="width: 50px;height:auto">
		<nav style="margin-right: 90px;float:right">
		<a href="saiteja.html" id="kk" >Home</a>
		<a href="#" id="kk">Help</a>
		<a href="#" id="kk">About us</a>
		</nav>
	</div>
	<div>
		<img src="baby.jpg" style="width:250px;height:auto;margin-top: 4%;float:left">
<div id="sai">
	<div id="teja">
	</div>
	<div id="ammu">
		<form action="logindetailst.php">
  <div>
    <h1 style="color: #ff3399">Log in</h1><br>
    <p>Please fill in details to log into your account</p><br>
    <hr>
<br>
    <label for="email" style="color:#9900ff"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id='txtEmail' name="email" required style="background-color:  #d9ffb3;border-radius: 3px;width:225px"><br><br>

    <label for="psw" style="color:#9900ff"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="myInput" name="password" required style="background-color:  #d9ffb3;border-radius: 3px;width:200px"><br><br>
     <input type="checkbox" onclick="myFunction()">Show Password<br><br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <br>
    <p>By logging in, you agree to our <a href="#" style="color:dodgerblue">Terms & conditions</a>.</p><br>

    <div class="clearfix">
      <button type="submit" name="submit" class="cancelbtn" onclick='Javascript:checkEmail();waaw()' style="margin-left: 50px ;background-color: red;border-radius: 4px;color:white;padding:4px;cursor: pointer;font-size: 17px"><a href="indexer.php"></a> Login</button><br><br>
     

    </div>
  </div>
</form>
	</div>
</div>
</div>
<div style="overflow-x: hidden;border-radius: 10px">
<footer style="background-color: #000066;color:grey;width:100%;height:auto;text-align:center;cursor: pointer;padding: 20px">
	&#169 copyright 2020@saiteja
	<br>
	<a href="#">privacy policy</a><br>
	<a href="#">Contact us</a><br>
	<a href="#">Help</a><br><br>
	<i class="fa fa-instagram" style="font-size:23px;color:#ff0066"></i><i class="fa fa-facebook" style="font-size:23px;color:blue"></i><i class="fa fa-twitter" style="font-size:23px;color: skyblue"></i>
</footer>
</div>
</form>


</body>
</html>