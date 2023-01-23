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
  <a href="viewapplys.php"><img class= "top-right1"src="home.png" width="50px" height="50px"></a>
 <CENTER>
   <h1>MARK LIST</h1></CENTER>
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
  <tr>
    <th>Name</th>
    <th>Id</th>
    <th>sem 1</th>
    <th>sem 2</th>
    <th>sem 3</th>
    <th>sem 4</th>
    <th>sem 5</th>
    <th>sem 6</th>
    <th>sem 7</th>
    <th>sem 8</th>
    <th>Total CGPA/Percentage</th>

    
    
  </tr>


<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $r['Id']; ?></td>
    <td><?php echo $r['s1']; ?></td>
     <td><?php echo $r['s2']; ?></td>
      <td><?php echo $r['s3']; ?></td>
       <td><?php echo $r['s4']; ?></td>
           <td><?php echo $r['s5']; ?></td>
     <td><?php echo $r['s6']; ?></td>
      <td><?php echo $r['s7']; ?></td>
       <td><?php echo $r['s8']; ?></td>
    <td><?php echo $r['tcgpa']; ?></td>

  

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