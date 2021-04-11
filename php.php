<?php 

$con = mysqli_connect('127.0.0.1','root','');
if(!con)
{
  echo 'Not connected to server';
}
if(!mysqli_select_db($con,'saiteja'))
{
  echo 'Database not selected';
}

$username=$_post['username'];
$password=$_post['password'];
$address=$_post['address'];
$City=$_post['City'];
$State=$_post['State'];
$Zip=$_post['Zip'];

$sql="INSERT INTO shipping data(username,password,address,City,State,Zip) VALUES('$username','password','address',City','State','Zip')";

if(!mysqli_query($con,$sql))
{
  echo 'Not inserted';
}

else
{
  echo'Inserted';

}

header("refresh:2; url=5thquestion.html");


 ?>