<!DOCTYPE html>
<html lang="en">
<head>
	<title>SAITEJA-18MIS030</title>
  <link rel="icon" href="blue.jpg" type="image/gif" sizes="16x16">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style type="text/css">

	
@font-face {
  font-family: 'Josefin Sans', sans-serif;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('../fonts/poppins/Poppins-SemiBold.ttf'); 
}
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}
body, html {
	height: 100%;
font-family: 'Josefin Sans', sans-serif;
color :black;
background-image: url("vader6.jpg");
background-size: cover;
background-position: center;
}
a {
	font-family: 'Josefin Sans', sans-serif;
	font-size: 14px;
	line-height: 1.7;
	color:black;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}
a:focus {
	outline: none !important;
}
a:hover {
	text-decoration: none;
}
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}
p {
	font-family: 'Josefin Sans', sans-serif;
	font-size: 14px;
	line-height: 1.7;
	color: black;
	margin: 0px;
}
ul, li {
	margin: 0px;
	list-style-type: none;
}

input {
	outline: none;
	border: none;
}
input[type="number"] {
    -moz-appearance: textfield;
    appearance: none;
    -webkit-appearance: none;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}
textarea {
  outline: none;
  border: none;
}
textarea:focus, input:focus {
  border-color: black !important;
}
input:focus::-webkit-input-placeholder { color:black; }
input:focus:-moz-placeholder { color:black; }
input:focus::-moz-placeholder { color:black; }
input:focus:-ms-input-placeholder { color:black; }
textarea:focus::-webkit-input-placeholder { color:black; }
textarea:focus:-moz-placeholder { color:black; }
textarea:focus::-moz-placeholder { color:black; }
textarea:focus:-ms-input-placeholder { color:black; }
input::-webkit-input-placeholder {color: #999999;}
input:-moz-placeholder {color: #999999;}
input::-moz-placeholder {color: #999999;}
input:-ms-input-placeholder {color: #999999;}
textarea::-webkit-input-placeholder {color: #999999;}
textarea:-moz-placeholder {color: #999999;}
textarea::-moz-placeholder {color: #999999;}
textarea:-ms-input-placeholder {color: #999999;}
button {
	outline: none !important;
	border: none;
	background: transparent;
}
button:hover {
	cursor: pointer;
}
iframe {
	border: none !important;
}
.container-contact100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: transparent;
  position: relative;
  z-index: 1;

}
.contact100-map {
  position: absolute;
  z-index: -2;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;

}
.wrap-contact100 {
  width: 670px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  position: relative;
}
.contact100-form-title {
  width: 100%;
  position: relative;
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;

  padding: 64px 15px 64px 15px;
}
.contact100-form-title-1 {
  font-family: Poppins-Bold;
  font-size: 20px;
  color: #fff;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 7px;
  

}
.contact100-form-title-2 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 15px;
  color: #fff;
  line-height: 1.5;
  text-align: center;
}
.contact100-form-title::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(54,84,99,0.7);
}
.contact100-form {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 43px 88px 57px 190px;
  background-color: #b3ffff;
}
.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 1px solid #b2b2b2;
  margin-bottom: 26px;
}

.label-input100 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 15px;
  color: black;
  line-height: 1.2;
  text-align: right;
  position: absolute;
  top: 14px;
  left: -105px;
  width: 80px;
}
.input100 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 15px;
  color: black;
  line-height: 1.2;
  display: block;
  width: 100%;
  background: transparent;
  padding: 0 5px;
}
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}
.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 0;
  height: 1px;
  -webkit-transition: all 0.6s;
  -o-transition: all 0.6s;
  -moz-transition: all 0.6s;
  transition: all 0.6s;
  background: #57b846;
}
input.input100 {
  height: 45px;
}
textarea.input100 {
  min-height: 115px;
  padding-top: 14px;
  padding-bottom: 13px;
}
.input100:focus + .focus-input100::before {
  width: 100%;
}
.has-val.input100 + .focus-input100::before {
  width: 100%;
}
.container-contact100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  padding-top: 8px;
}
.contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  min-width: 160px;
  height: 50px;
  background-color: #57b846;
  border-radius: 25px;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 16px;
  color: #fff;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.contact100-form-btn i {
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.contact100-form-btn:hover {
  background-color: #333333;
}
.contact100-form-btn:hover i {
  -webkit-transform: translateX(10px);
  -moz-transform: translateX(10px);
  -ms-transform: translateX(10px);
  -o-transform: translateX(10px);
  transform: translateX(10px);
}
@media (max-width: 576px) {
  .contact100-form {
    padding: 43px 15px 57px 117px;
  }
}
@media (max-width: 480px) {
  .contact100-form {
    padding: 43px 15px 57px 15px;
  }
  .label-input100 {
    text-align: left;
    position: unset;
    top: unset;
    left: unset;
    width: 100%;
    padding: 0 5px;
  }
}
.validate-input {
  position: relative;
}
.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 2px;
  pointer-events: none;
  font-family: Poppins-Medium;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
.alert-validate::after {
  content: "\f06a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 15px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 8px;
}
.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}
@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
	</style>
</head>
<body>
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>
				<span class="contact100-form-title-2">
					Having some issues or need any help ? write to us
				</span>
			</div>
			<form class="contact100-form validate-form"  method="POST">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100" style="color:red">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100"  style="color:red">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"  style="color:red">Phone:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100"  style="color:red">Comment / Issue:</span>
					<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button clss="contact100-form-btn" type="submit" name="submit" style="color:white;background-color: blue;border-radius: 10px;border:1px solid white;padding:5px;width:130px">

						<span>
							Submit
						</span>
					</button>
				</div>
			</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if(isset($_POST)){
$sql = "INSERT INTO about (name,email, phone, message)VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["message"]."')";
$result = mysqli_query($conn,$sql);
}
?>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
