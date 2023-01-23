<?php
 include("db_conn.php");
include("session.php");

$un=$_SESSION["un"];
$name=$_POST["name"];
$type=$_POST["type"];

$location=$_POST["location"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$criteria=$_POST["criteria"];
$uname=$_POST["un"];
$pwd=$_POST["pw"];

 

$sql1="SELECT * FROM login WHERE uname ='$uname'";
$result=mysqli_query($con,$sql1);
$r = mysqli_fetch_array($result);
$no=mysqli_num_rows($result);

if ($no>0) {
	$message = "Username already taken";
echo "<script type='text/javascript'>setTimeout(\"location.href = 'addcmp.php';\",1500); alert('$message');</script>";
}

else {

$sql="INSERT INTO users values('$name','$type','$location','$email','$phone','$criteria','$uname','$pwd','Company')";
$res=mysqli_query($con,$sql);

$sqli="INSERT INTO login values('$uname','$pwd','Company')";
$res=mysqli_query($con,$sqli);

header("location:adminhome.php");
}
?>