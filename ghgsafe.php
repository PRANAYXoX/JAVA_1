<?php
           
   
if(isset($_POST['submit']))
{
    session_start(); 
 $_SESSION['user']=$_POST['ID']; 
    $_SESSION['stat']="safe";
    header("location:ghglp.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h1{
            margin-top: -150px;
            margin-left: -8px;
            
            width:1362px;
            height:250px;
            background-color: rgba(0,0,0,0.8);
            color:red;
           font-size: 40px; 
        }
          h1:hover{
            margin-top: -150px;
            margin-left: -8px;
            width:1362px;
            height:253px;
            background-color: rgba(0,0,0,0.9);
           color:lime;
              transition: 0.7s;
              
            
        }
        body{
            background-image: linear-gradient(to right,lime,green,seagreen);
       font-family: 'bungee';
           
        }
        span{
            font-family: 'bungee';
            font-size: 56px;
            color: white;
            letter-spacing: 7px;
        }
        input{
            width:300px;
            height:30px;
            background-color:  rgba(0,0,0,0.6);
            border-radius: 20px;
              height:48px;
            margin-top: -30px;
            font-size: 20px;
            color: yellow;
      
        }
        ::placeholder{
            color: goldenrod;
            font-family: cursive;
            letter-spacing: 5px;
        }
          input:hover{
            width:302px;
            height:50px;
            background-color: rgba(0,0,0,0.9); 
            border-radius: 20px;
                color: yellow;
        }
        .btn{
            background-color:red;
            width:50px;
            border-radius: 50px;
        }
          .btn:hover{
            background-color: darkred;
            width:50px;
              border-radius: 50px;
        }
        h2{
            margin-top: -50px;
             font-size: 135px;
        }
    </style>
</head>
<body>
   <center><h2>G.&#8721;.A.</h2><h1><span style="color:red">REPORT:</span><span>SAFE</span><form method="post" action=""><input type="text" name="ID" placeholder="ENTER G.E.A. ID.">
   <input class="btn" type="submit" name="submit" value="."></form></h1></center>
    
</body>
</html>