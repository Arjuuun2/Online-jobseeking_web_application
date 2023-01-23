<?php
 include("db_conn.php");
 include("session.php");

$uname=$_SESSION['uname'];


$name=$_POST["name"];
$title=$_POST["title"];

$date=$_POST["date"];
$email=$_POST["email"];
$criteria=$_POST["criteria"];
$comment=$_POST["comment"];




$sql="INSERT INTO `drives` (`name`, `title`, `date`, `email`, `criteria`, `comment`,`uname`) VALUES ('$name','$title', '$date', '$email', '$criteria', '$comment','$uname')";
$res=mysqli_query($con,$sql);


if ($res) {
	header("location:chome.php");

}


?>