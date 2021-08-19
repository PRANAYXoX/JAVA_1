<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $con=mysqli_connect("localhost","root","","company") or die("CONNECTION FAILED");
    $sql="SELECT * FROM employee";
    $result=mysqli_query($con,$sql);
    $nr=mysqli_num_rows($result);
    if(empty($result)){
        echo"QUERY FAILED!";
    }else{
        echo"CONNECTION SUCCESSFUL!!";
    }
    while($row=mysqli_fetch_assoc($result)){
        echo $row['ID'];
        echo $row['NAME'];
        echo $row['SALARY'];?> <br> <?php
    }
    echo"<br>RESULT:$nr";
    ?>
</body>
</html>