<!DOCTYPE html>
<?php

include ("dbconn.php");
include ("ghgfncadmin.php");

$msg=' '; $msg2=' ';
$AID=' ';
 $PASS=0; 
if(isset($_POST['submit']))
{
    $AID=$_POST[ 'ID' ];
    $PASS=$_POST['PASS'];
    if(empty($AID))
    {
        $msg="<div class='error'>Please Enter Admin-ID!</div>";
    } 
    else
    {
      $ID2=mysqli_query($conn,"select PASS from ghgadmin where ID='$AID' ");  
    $c_PASS=mysqli_fetch_array($ID2);
    $c_PASS2=$c_PASS[ 'PASS' ];
        if($PASS!=$c_PASS2)
        {
            $msg2="<div class='error'>INVALID PASSWORD</div>"; 
        }
        else
        {
session_start();            
     $_SESSION['name']=$AID;
        
       header("location:ghgl6.html");
         
            
        }
    }
    
}
?>

<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="styles1.css">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>    
   <style>
       .error{
           color:lawngreen;
           font-size: 14px;
           text-align:inherit;
       }
         p1{ font-size: 50px; 
           font-family: 'Bungee';
        color: dodgerblue;
          text-shadow:  4px 5px  blue;
         position:relative;
         border-radius: 40px;
         top:-35px;
         left:72px;
         }
       .login-box form a
{
    position:sticky;
    display: inline-block;
    padding: 10px 20px;
    color: teal;
    font-size: 18px;
    text-transform: uppercase;
    text-decoration: none;
    overflow: hidden;
    margin-top:  15px;
    letter-spacing: 4px;
    margin-right: auto;
      animation-name: animatebottom2;
                animation-duration: 4s;
    position: relative;
}
       .login-box form a:hover
{
    background: yellowgreen;
    color: #f1eee6;
    border-radius: 30px;
    box-shadow:  0 0 25px lawngreen, 
                             0 0 50px lawngreen, 
                               0 0 100px lawngreen ;
transition:  .7s;
       }
     div  .hype a{
           font-size: 10px;
           margin-top: 20px;
         color:darkolivegreen;
          animation-name: animatebottom2;
                animation-duration: 4s;
    position: relative;
       }
         @keyframes animatebottom2{ 
            from{box-shadow:  50px 40px 50px limegreen , 0 0 20px limegreen, 
                               0 0 40px limegreen; opacity: 0;  border-radius: 70px; background-color: burlywood;  }
           to{box-shadow: 0px 0px 0px lime; opacity: 1;  border-radius: 30px; background-color:transparent;}}
        
        div  .hype a:hover{
       font-size: 10px;
           margin-top: 20px;
         color:dodgerblue;
            box-shadow:  0 0 10px lawngreen, 
                             0 0 20px lawngreen, 
                               0 0 40px lawngreen ;
        
       }
   
       span{
           border: 4px solid teal; 
           border-radius: 30px;
              animation-name: animatebottom3;
                animation-duration: 4s;
    position: relative;
           
       }
        @keyframes animatebottom3{ 
            from{  font-size: 54px;
           background: yellowgreen;
    color: greenyellow;
                opacity: 0.3;
    border-radius: 100px;
    box-shadow:  0 0 35px lawngreen, 
                             0 0 60px lawngreen, 
                               0 0 110px lawngreen ;}
           to{ border: 4px solid limegreen; 
           border-radius: 30px; opacity: 0.9;}}
       span:hover{   
           font-size: 54px;
           background: teal;
    color: dodgerblue;
    border-radius: 100px;
    box-shadow:  0 0 35px yellowgreen, 
                             0 0 60px yellowgreen, 
                               0 0 110px yellowgreen ;
           transition: .7s;
       }
       body{
           font-family: 'Bungee';  font-size: 1px;  
           overflow: hidden;
           background-image: url(ghg3.jpeg);
       }
            
.btn1{
    position:sticky;
    display: inline-block;
    padding: 10px 20px;
    color: dodgerblue;
     font-family: 'Bungee'; 
    font-size: 18px;
    text-transform: uppercase;
    text-decoration: none;
    overflow: hidden;
    margin-top:  85px;
    letter-spacing: 4px;
    margin-right: auto;
    background: transparent;
    opacity: 0.p;
    border-radius: 10%;
     animation-name: animatebottom;
                animation-duration: 4s;
    position: relative;
}
       @keyframes animatebottom{ 
            from{box-shadow:  50px 40px 50px limegreen, 50px 40px 50px limegreen; opacity: 0; background:burlywood;}
            to{box-shadow: 0px 0px 0px red; opacity: 1; background:transparent;}
       }
.btn1:hover{
    background-color: darkred;
    color: #f1eee6;
    border-radius: 30px;
    box-shadow:  0 0 25px red, 
                             0 0 50px red, 
                               0 0 100px red;
transition:  .7s;
       }
       
      </style>
</head>
 <body >
     <center><p1><span style="background-color:black; opacity:0.9; filter:alpha(opacity=500)"><b><u> G&#8479;&#8721;&#8721;NHOUSE </u>&emsp; <u>&#8721;MISSION</u> &emsp; <u>ANALYTICS</u></b><sup>&reg;</sup></span></p1></center>
       <center>
        <div class="login-box">
       <img src="bargif.gif" alt="avatar" class="avatar">
       <form action="#" method="post">
           <div class="user-box">
              <input type="text" name="ID" required>
               <label>G.&#8721;.A. ADMIN-ID</label><br>
               <?php echo $msg; ?>
               </div>
    <div class="user-box">
              <input type="Password" name="PASS" required>
        <label>G.&#8721;.A. PASSWORD</label>
              <?php echo $msg2; ?>
               </div>
               <div class="hype">
           
              <input type="submit" name="submit" value="&#x1F6C8;LOGIN HERE" class="btn1"><br>
              
           </div>
     
       </form>
       </div>
       
    </center>
</body>
</html>
