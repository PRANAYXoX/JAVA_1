<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","company")or die("CONNECTION UNSUCCESSFUL!");
$id=0;
if($con)
{
    if(isset($_POST['btn']))
    {
        $id=$_POST['id'];
        $sql="select * from empp2 where id=$id";
        $res=mysqli_query($con,$sql);
       
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <center>
   <form action="phpdb5.php" method="post">
        <input type="text" placeholder="ENTER ID" name="id"><br>
        <input type="submit" value="SEARCH" name="btn"><br>
         </form><br>
         <?php
       if($id==0)
           echo "ENTER VALUE TO FETCH RECORD.";
       else
       {
           if(mysqli_num_rows($res)>0)
           {
               echo "<br>ID ENTERED:$id<br>RECORD FOUND!";
           while($row=mysqli_fetch_assoc($res))
           {
               echo"<br>".$row['id'];
               echo"<br>".$row['name'];
               echo"<br>".$row['email'];
               }
           }
               else
               echo"<br>ID ENTERED:$id<br>RECORD NOT FOUND!";
       }
        ?>
    </center>
</body>
</html>