<?php
include("db_conn.php");
include("session.php");
  
   $no=0;


   
    
    if(!isset($_GET['namesearch'])){
       $sql = "SELECT * FROM apply";
        $res=mysqli_query($con,$sql);
        $no=mysqli_num_rows($res);
      }

?>


<!DOCTYPE html>
<html>
<title>Admin</title>
<head>
  
 <body bgcolor="#FFFFFF"><center><img src="log.png" width="240"></center> 
  <a href="adminhome.php"><img class= "top-right1"src="hom.png" width="50px" height="50px"></a>
   <!-- <center> <img src="admino.jpg" width=150/></center> -->
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>


body  {
  background-image: url("bl-gr.jpg");
  background-size: 1365px 700px;
}
 




th {
    background-color: #424242;
    color: white;
    text-align: left;
    padding: 8px;
}

tr : nth-child(even){background-color: #f2f2f2}

table {
    border-collapse: collapse;
    width: 100%;
}
td {
    text-align: left;
    padding: 8px;
    color: black;
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

a{
  text-decoration: none;
}

/*.btnRegister {
    padding: 13px;
    background-color: #5d9cec;
    color: #f5f7fa;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
    border: #5791da 1px solid;
    font-size: 1.1em;
}
*/

tr : nth-child(even){background-color: #f2f2f2}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}



p {
  color: black;
}
/*.button2 {border-radius: 4px;}*/



</style>

<body>

<form method="get" action="" >

 <input class="demo-input-box" id="myInput" onkeyup="myFunction()" type="text" name="namesearch" placeholder="Name" value="<?php if(isset($_GET['namesearch'])) echo $_GET['namesearch']; ?>">
 <!-- <input class="demo-input-box" type="tel" name="nosearch" placeholder="Phone number" value="<?php //if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>"> -->
  <!-- <input type="submit"   name="submit" value="Search"> -->

</form>

 
<!--  -->


<?php
if($no>0)
{
  
?>
<br><br><br>
<table id="myTable">
  <tr class="header">
    <th>Name</th>
    <th>Id</th>
    <th>Title</th>
    <th>Date</th> 
    <th>Email</th>
    <th>Total Cgpa/Percentage</th>
    <th>Status</th>
  </tr>

<?php
  while($r=mysqli_fetch_array($res))
  {$id=$r['id']; 
?>
<tr>
   
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $id; ?></td>
     <td><?php echo $r['title']; ?></td>
    <td><?php echo $r['date']; ?></td> 
    <td><?php echo $r['email']; ?></td>
    <td><?php echo $r['tcgpa']; ?></td>
    <td><?php echo $r['apstatus']; ?></td>


    <td><a href="cv.php?uname=<?php echo $r[16]; ?>" >Resume</a>
    </td>
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

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>

</html>
  