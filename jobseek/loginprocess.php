<?php
include("db_conn.php");
include("session.php");



$uname=$_POST["uname"];
$pwd=$_POST["pwd"];

$sql=mysqli_query($con,"select * from login where uname='$uname' and pwd='$pwd'");
if ($sql->num_rows>0) {
	while($rows = $sql-> fetch_assoc()){  
			$role=$rows['role'];
			$name=$rows['uname'];}
			
			$_SESSION['uname']="$name";//set name to session - This will be needed to restricted pages pertaining to other unregistered persons.
		if($role == 'admin')
			{
 			  header("location:adminhome.php");
			}
		else if($role == 'Company')
			{
			 header("location:chome.php");
			}
		else if($role == 'Student')
			{
 			header("location:sthome.php");
			}
		
		else{
	// echo "ENTER VALID USERNAME AND PASSWORD";
		$message = "Enter valid USERNAME or PASSWORD";
			echo "<script type='text/javascript'>setTimeout(\"location.href = 'index.php';\",1500); alert('$message');</script>";
	//header("location:index.php");

}}
?>