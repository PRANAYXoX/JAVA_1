<!DOCTYPE html>
<?php

include ("dbconn.php");
include ("ghgfnc.php");

$msg=' '; $msg2=' ';
$cname=' ';
 $ID=0; 
if(isset($_POST['submit']))
{
    $cname=$_POST[ 'cname' ];
    $ID=$_POST['ID'];
    if(empty($cname))
    {
        $msg="<div class='error'>Please Enter C-Name!</div>";
    } else if(email_exists($cname,$conn))
    {
      $ID2=mysqli_query($conn,"select ID from ghgreg where CNAME='$cname' ");  
    $c_name=mysqli_fetch_array($ID2);
    $c_named=$c_name[ 'ID' ];
        if($ID!=$c_named)
        {
            $msg2="<div class='error'>INVALID PASSWORD</div>"; 
        }
        else
        {
session_start();            
     $_SESSION['name']=$cname;
        
       header("location:ghgl4.html");
         
            
        }
    }
    else{
        $msg='<div class="error">COMPANY NAME IS NOT REGSTERED!!</div> ';
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
        color: limegreen;
          text-shadow:  4px 5px  green;
         position:relative;
         border-radius: 40px;
         top:-65px;
         left:72px;
         }
       .login-box form a
{
    position:sticky;
    display: inline-block;
    padding: 10px 20px;
    color: forestgreen;
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
           font-size: 12px;
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
       font-size: 12px;
           margin-top: 20px;
         color:red;
            box-shadow:  0 0 10px lawngreen, 
                             0 0 20px lawngreen, 
                               0 0 40px lawngreen ;
        
       }
   
       span{
           border: 4px solid limegreen; 
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
           background: yellowgreen;
    color: greenyellow;
    border-radius: 100px;
    box-shadow:  0 0 35px lawngreen, 
                             0 0 60px lawngreen, 
                               0 0 110px lawngreen ;
           transition: .7s;
       }
       body{
           font-family: 'Bungee';  font-size: 15px;  
           overflow: hidden;
       }
            
.btn1{
    position:sticky;
    display: inline-block;
    padding: 10px 20px;
    color: forestgreen;
     font-family: 'Bungee'; 
    font-size: 18px;
    text-transform: uppercase;
    text-decoration: none;
    overflow: hidden;
    margin-top:  15px;
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
    background: yellowgreen;
    color: #f1eee6;
    border-radius: 30px;
    box-shadow:  0 0 25px lawngreen, 
                             0 0 50px lawngreen, 
                               0 0 100px lawngreen ;
transition:  .7s;
       }
       
      </style>
</head>
 <body >
     <center><p1><span style="background-color:black; opacity:0.9; filter:alpha(opacity=500)"><b><u> G&#8479;&#8721;&#8721;NHOUSE </u>&emsp; <u>&#8721;MISSION</u> &emsp; <u>ANALYTICS</u></b><sup>&reg;</sup></span></p1></center>
       <center>
        <div class="login-box">
       <img src="avtr2.png" alt="avatar" class="avatar">
       <form action="#" method="post">
           <div class="user-box">
              <input type="text" name="cname" required>
               <label>Company-Name</label><br>
               <?php echo $msg; ?>
               </div>
    <div class="user-box">
              <input type="Password" name="ID" required>
        <label>G.&#8721;.A. ID</label>
              <?php echo $msg2; ?>
               </div>
               <div class="hype">
           <a href="ghgpass.php"> FORGOT PASSWORD?</a></div>
              <input type="submit" name="submit" value="&#9432;LOGIN HERE" class="btn1"><br>
              
       <a href="ghgl2.html"> Register </a>
     
       </form>
       </div>
       
    </center>
</body>
</html>