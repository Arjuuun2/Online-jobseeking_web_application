<?php
include("db_conn.php");
$id=$_GET["id"];

$sql="delete from drives where id='$id'";
$res=mysqli_query($con,$sql);
header("location:viewrec.php");
?>