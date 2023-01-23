<?php
 include("db_conn.php");
include("session.php");


$date = $_GET['date'];
$uname= $_GET['uname'];
$sql = "UPDATE `apply` SET apstatus='Approved' WHERE  uname='$uname' and date='$date'";
$qry = mysqli_query($con,$sql);
if ($qry) {
     // echo "<script>";
     // echo "alert('Now tell him/her to meet doctor')";
     // echo "</script>";
     header("refresh:0.01;url=viewapplyst.php");}
	 ?>


