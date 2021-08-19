<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <style>
         th{ font-size: 20px; 
           font-family: fantasy;
        color: red;
          text-shadow:  1px 1px 1px  black;
        }
         td{ font-size: 18px; 
           font-family: fantasy;
        color:green;
          text-shadow:  1px 1px 1px  black;
        }
         body{
             
             font-family: fantasy;
             font-size: 22px;
             color: darkorange;
             text-shadow: 2px 2px 2px black;
             background-color:sandybrown;
         }
          p{
             
             font-family: monospace;
             font-size: 18px;
             color:red;
         }
  .reg{
    position:relative;
    top:240px;
    left:50%;
    width:540px;
    height:400px;
    padding: 30px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.9);
    box-sizing: border-box;
    box-shadow:0 15px 25px rgba(0,0,0,10);
    border-radius: 25px;

}
         #op{
             width: 210px;
             border-radius: 5px;
             background-color:yellow;
             color: darkred;
         }
          form input[type=submit]{
              padding:8px 10px;
           font-size: 18px;
                 font-family:sans-serif;
              width: 250px;
              border-radius: 10px;
           top: 7%;
        border:2px solid green;
            
              background-color: goldenrod;
              border-bottom:2px solid red;
              color:darkred;
              text-shadow: 2px 2px 2px black;
              
         
       }
         
         
       
        form input[type=submit]:hover{
       font-size: 17px;
            font-family: fantasy;
        top: 10%;
         color:white;
               background:lime;
            
                 border:3px solid red;
        border-radius: 20%; 
            transition: .9s;
            box-shadow:  0 0 10px lime, 
                             0 0 20px lime, 
                               0 0 40px lime ;
        
       }
         p1{
             font-family: fantasy;
             font-size: 22px;
             color: red;
             text-shadow: 2px 2px 2px black;
         }
    </style>
     <?php
               $s='';
      
     $s2=0;
    
    $m='';
    
 if(isset($_POST['submit']))
{
    $s=$_POST['s1'];
      
     if(is_numeric($s))
     {
         $s2=sqrt($s);
     }
     else
          $m="INVALD INPUT!!";
     
     
}
              
              ?>
</head>
<body>
   
          <div class="reg">
          <center><u><p1>SQRT():-</p1></u><center>
    <br><center> <form action="mthsqrt.php" method="post"> 

           
              <label>ENTER A NUMBER:</label><br>
              <input type="text" name="s1" id="op">
               <br><br>
            
              
        <input type="submit" name="submit" value="PROCEED"><br>
       </form>
      <?php if(is_numeric($s))
              echo "SQUARE ROOT:$s2";
              else
                  echo $m;
             
              ?>
        </div></center>
      
  
    
</body>
</html>