<?php
 include("db_conn.php");
 include("session.php");

$uname=$_SESSION['uname'];


$name=$_POST["name"];
$qua=$_POST["qua"];
$college=$_POST["college"];
$company=$_POST["company"];
$title=$_POST["title"];

$date=$_POST["date"];
$email=$_POST["email"];



$tcgpa=$_POST["tcgpa"];
$cv=$_POST["cv"];






$sql="INSERT INTO apply VALUES ('$name','$qua','$college', '$company','$title', '$date', '$email', '$tcgpa','$cv','$uname','Approve?')";
$res=mysqli_query($con,$sql);


if ($res) {
	header("location:viewstrec.php");

}


?>