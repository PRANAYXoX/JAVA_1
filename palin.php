<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $str="DAD";
    $c="";
    for($i= strlen($str)-1;$i>=0;$i--)
    {
        $c=$c.$str[$i];
    }
    if(!strcmp($c,$str))
        echo"<br>PALINDROME!!";
    else
        echo"<br>NOT A PALINDROME!!";
    $x=0;
    $y=strlen($str)-1;
    $fl=true;
    do
     {
         if($str[$x]!=$str[$y])
         {
             $fl=false;
             break;
         }
        $x++;
        $y--;
     }while($x<=$y);
    if($fl)
        echo"<br>PALINDROME!!";
    
    ?>
    
</body>
</html>