<?php
 include("db_conn.php");

$name=$_POST["name"];
$qua=$_POST["qua"];
$college=$_POST["college"];
$gender=$_POST["gender"];


$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];

 

$sql1="SELECT * FROM login WHERE uname ='$uname'";
$result=mysqli_query($con,$sql1);
$r = mysqli_fetch_array($result);
$no=mysqli_num_rows($result);

if ($no>0) {
	$message = "Username already taken";
echo "<script type='text/javascript'>setTimeout(\"location.href = 'addst.php';\",1500); alert('$message');</script>";
}

else {

$sql="INSERT INTO student values('$name','$qua','$college','$gender','$email','$phone','$address','$uname','$pwd')";
$res=mysqli_query($con,$sql);

$sqli="INSERT INTO login values('$uname','$pwd','Student')";
$res=mysqli_query($con,$sqli);

header("location:index.php");
}
?>