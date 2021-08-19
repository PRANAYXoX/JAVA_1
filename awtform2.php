<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        p{
            font-family: cursive;
            color:red;
        }
    </style>
</head>
<body>
   <form action="awtform2.php" method="post">
       <input type="text" name="num" placeholder="ENTER A NUMBER" required>
       <input type="submit" name="submit" value="Table"> 
       
   </form>
   <?php 
    if(isset($_POST['submit']))
    {
        $n=$_POST['num'];
        
        if(is_numeric($n))
        {
            echo"<table border='1'>";
           
            for($i=1;$i<=10;$i++)
            {
                 echo"<tr>";
                echo"<td>$n * $i</td><td>".($n*$i)."</td>";
                echo"</tr>";
            }
            
            echo"</table>";
        }
            else
        echo"<br>INVALID NUMBER!!";
       echo"<br<br><p>ENTERED NUMBER:$n<br>"; 
        var_dump($n);
        echo"</p>";
        
    }?>
    
</body>
</html>