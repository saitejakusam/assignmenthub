<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body style="background-image: url(bg1.jpg);background-size: cover;background-repeat: no-repeat;">
 
<form method="post" enctype="multipart/form-data">
    <div style="margin-left: 30%;margin-top: 20%">
    <label style="margin-left: 40px" >Title</label>
    <input type="text" name="title"><br><br>
    <label style="margin-left: 100px;color:red" >File Upload</label><br><br>
    <input type="File" style="margin-left: 80px;padding:6px;background-color: green;color:white"  name="file"><br><br>
    <input type="submit" style="margin-left: 100px;color:white;background-color: red;padding:6px;padding-left: 15px;padding-right: 15px;border-radius: 5px"  name="submit" src="index.php">
 
 </div>
</form>
 
</body>
</html>
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "saiteja";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'files';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>