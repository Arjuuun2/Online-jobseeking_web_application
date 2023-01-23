<?php
include("db_conn.php");
include("session.php");

$uname=$_SESSION['uname'];
//echo $uname;

$sql = "SELECT * FROM users WHERE uname='$uname'"; 
    $result=mysqli_query($con, $sql);
    $r=mysqli_fetch_array($result);

?>


<html>
<head>
    <title>Company</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body bgcolor="#FFFFFF"><center>
   </center>
     <a href="chome.php"><img class= "top-right1"src="hom.png" width="50px" height="50px"></a>
   <!-- <center> <img src="admino.jpg" width=150/></center> -->
    
    
    
<style type="text/css">
    body {
    font-family: Arial;
    color: #333;
    font-size: 0.95em;
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
.form-head {
    color: #191919;
    font-weight: normal;
    font-weight: 400;
    margin: 0;
    text-align: center;    
    font-size: 1.8em;
}

.error-message {
    padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
}

.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
}

.demo-table {
    background: #ffffff;
    border-spacing: initial;
    margin: 15px auto;
    word-break: break-word;
    table-layout: auto;
    line-height: 1.8em;
    color: #333;
    border-radius: 4px;
    padding: 20px 40px;
    width: 380px;
    border: 1px solid;
    border-color: #e5e6e9 #dfe0e4 #d0d1d5;
}

.demo-table .label {
    color: #888888;
}

.demo-table .field-column {
    padding: 15px 0px;
}

.demo-input-box {
    padding: 13px;
    border: #CCC 1px solid;
    border-radius: 4px;
    width: 100%;
}

.btnRegister {
    padding: 13px;
    background-color: #5d9cec;
    color: #f5f7fa;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
    border: #5791da 1px solid;
    font-size: 1.1em;
}

.response-text {
    max-width: 380px;
    font-size: 1.5em;
    text-align: center;
    background: #fff3de;
    padding: 42px;
    border-radius: 3px;
    border: #f5e9d4 1px solid;
    font-family: arial;
    line-height: 34px;
    margin: 15px auto;
}

.terms {
    margin-bottom: 5px;
}
</style>
<body>

    <form name="repRegistration" method="post" action="addrecpro.php">
        <div class="demo-table">
        
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>  
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}




?>
        <center><h1>Job Details</h1></center>

                <div class="field-column">
                <label><b>Company Name</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="name"
                        value=<?php echo "'".$r['name']."'"; ?> required>
                </div>
            </div>
        
            <div class="field-column">
                <label><b>Job Title</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="title"
                         required>
                </div>
            </div>


            <div class="field-column">
                <label><b>Date</b></label>
                <div>
                    <input type="date" class="demo-input-box"
                        name="date"
                         required>
                </div>
            </div>




            <div class="field-column">
                <label><b>Email</b></label>
                <div>
                    <input type="email" class="demo-input-box"
                        name="email"
                        value=<?php echo "'".$r['email']."'"; ?> required>
                </div>
            </div>

                 <div class="field-column">
                <label><b>Criteria</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="criteria"
                        value=<?php echo "'".$r['criteria']."'"; ?> required>
                </div>
            </div>
 

            <div class="field-column">
                <label><b>Comments</b></label>
                <div>
                    <textarea name="comment" id="textarea" cols="51" rows="6" >
                    </textarea>
                </div>
            </div>

                        
            
                <div>
                    <input type="submit"
                        name="button" value="Register"
                        class="btnRegister">
                </div>
            
        </div>
    </form>
</body>
</html>
 