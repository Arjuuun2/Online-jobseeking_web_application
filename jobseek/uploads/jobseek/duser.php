<?php
include("db_conn.php");
$uname=$_GET["uname"];

$sql="delete from student where uname='$uname'";
$res=mysqli_query($con,$sql);



header("location:viewst.php");
?>