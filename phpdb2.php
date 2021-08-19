<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $nm="RON";
    $con=mysqli_connect("localhost","root","","company") or die("CONNECTION UNSUCCESSFUL!");
    $sql="update employee set ID=445 where NAME='$nm' ";
    $result=mysqli_query($con,$sql) or die("<br>FAILED!");
    
    ?>
</body>
</html>