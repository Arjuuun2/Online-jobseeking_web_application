<?php
include("db_conn.php");
include("session.php");

$uname=$_GET['uname'];
  
?>

<!DOCTYPE html>
<html>
<head>
<title>Marklist</title>

<style>



 
   table, th, td {
         border: 1px solid black;
         border-collapse: collapse;
      }

      table {
         border-spacing: 15px;
      }

      th, td{
         padding: 15px;
      }

      th {
         text-align: left;
      }
  .top-right1 {
  position: absolute;
  top: 50px;
  right: 90px;
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
  /*background-color: #006400;*/
  padding: 8px 8px;
  border-radius: 10px;
}




</style>
</head>
 <body bgcolor="#FFFFFF">
  <a href="viewapplyst.php"><img class= "top-right1"src="hom.png" width="50px" height="50px"></a>
 <CENTER>
   <h1>Resume</h1></CENTER>
   <br>
<br>



<center>


<?php


   $sql = "SELECT * FROM apply WHERE uname='$uname'";
        $res=mysqli_query($con,$sql);
        $no=mysqli_num_rows($res);


if($no>0)
{
?>


<br><br><br>

<table>


    


<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <?php echo $r['cv']; ?>
   
  

</tr>
<?php
  }
?>
</table>

<?php
  }
  else
  {
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p> <?php echo "No Records!!!!!!!!"; ?></p>
  
<?php    
  }
?>



</body>
<script>
function check()
{
  var a = confirm("Are you sure?");
  if(a==true)
  {
    return true;
  }
  else
  {
    return false;
  }
}
</script>
</html>