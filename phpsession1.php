<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   
</head>
<body>
   <center><table border="1" cellspacing="0">
       <form action="phpsession1.php" method="post" enctype="multipart/form-data">
           <tr><td>NAME</td><td><input type="text" name="name"></td></tr>
           <tr><td>PHOTO</td><td><input type="file" name="img"></td></tr>
           <tr><td colspan="2"><input type="submit" name="btn"></td></tr>
       </form>
       </table></center>
    
</body>
 <?php
    if(isset($_POST['btn'])){
    echo"<pre>";
        print_r($_FILES['img']);
        echo"</pre>";
        $f_n=$_FILES['img']['name'];
        $f_tn=$_FILES['img']['tmp_name'];
        //echo $FILES['img']['name'];
        move_uploaded_file($f_tn,"image/".$f_n);
    }
    ?>
</html>