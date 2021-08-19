<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    $con=mysqli_connect("localhost","root","","company");
    $msg="";
    if(isset($_POST['smt'])){
        $msg="SUBMIT BUTTON PRESSED";
        $name=$_POST["fname"];
        $id=$_POST["id"];
        $sal=$_POST["salary"];
        $sql="INSERT INTO employee values($id,'$name',$sal)";
        $res=mysqli_query($con,$sql) or die($msg="FAILED!");
        if($res>0)
            $msg="RECORD INSERTED!";
    }
        ?>
</head>
<body>
   <center><table border="1" cellspacing="0">
   <form action="phpdb3.php" method="post">
    <tr><td>NAME:</td><td><input type="text" name="fname" required></td></tr>
    <tr><td>ID:</td><td><input type="number" name="id"></td></tr>
    <tr><td>SALARY:</td><td><input type="number" name="salary"></td></tr>   
   <tr><td colspan="2"><input type="submit" name="smt"></td></tr>
   <tr><td colspan="2"><?php echo $msg;?></td></tr>
   </form>
   </table></center>
    
</body>
</html>