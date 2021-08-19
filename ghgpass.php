
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
            width:1360px;
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
            background-image: url(ghg13.jpg);
            background-size: 100%;
       font-family: 'bungee';
           font-size: 1px;
            color:limegreen;
            text-shadow: 2px 2px 2px black;
        }
        span{
            font-family: 'bungee';
            font-size: 56px;
            color: white;
            letter-spacing: 7px;
        }
        input{
            width:600px;
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
            font-family: fantasy;
            letter-spacing: 5px;
        }
          input:hover{
            width:600px;
            height:50px;
            background-color: rgba(0,0,0,0.9); 
            border-radius: 20px;
                color: yellow;
        }
        .btn{
            background-color:limegreen;
            width:120px;
            border-radius: 50px;
            color:aliceblue;
        }
          .btn:hover{
            background-color: (0,0,0,0.5);
            width:120px;
              border-radius: 50px;
              color:white;
              text-shadow: 0 0 15px , 0 0 25px , 0 0 45px orangered ;
        }
        h2{
            margin-top: -50px;
             font-size: 135px;
        }
        p1{
            color:lawngreen;
            font-family:'BUNGEE';
            font-size: 45px;
            border-radius: 10px;
            background-color: rgba(0,0,0,0.9);
            text-shadow: 3px 3px 3px green;
                margin-top:-50px;
            
        }
          .btn2{
            background-color:red;
            width:120px;
              height: 44px;
            border-radius: 50px;
            color:white;
        }
          .btn2:hover{
            background-color: (0,0,0,0.5);
            width:120px;
              border-radius: 50px;
              color:white;
              text-shadow: 0 0 15px , 0 0 25px , 0 0 45px orangered ;
        }
    </style>
</head>
<body>
   <center><h2>G.&#8721;.A.</h2><h1><span style="color:red">G.&#8721;.A.-ID</span><span>RECOVERY</span><form method="post" action=""><input type="number" max="9999999" min="1000000" name="ID" placeholder="ENTER COMPANY REGISTRATION NUMBER">
   
       <input class="btn" type="submit" name="submit" value="&#x2611;SEARCH">
<a href="ghgl5.php">  <input class="btn2"   name="s" value="&emsp;&nbsp;&#9888;EXIT" ></a></form></h1></center> 
<?php

include ("dbconn.php");
include ("ghgfncadmin.php");?>

<?php $msg=' '; $msg2=' ';
$AID=' ';
 
if(isset($_POST['submit']))
{
    $AID=$_POST[ 'ID' ];
   
    if(empty($AID))
    {?>
<center><p1>Please Enter Company Registration Number!</p1></center><?php
    } 
    else
    {
      $ID2=mysqli_query($conn,"select * from ghgreg where CREG='$AID' ");  
    $row=mysqli_num_rows($ID2);
    if($row==0)
        {?>
          <center> <p1>RECORD NOT FOUND!!</p1></center> 
        <?php }
        else
        {
        $result= mysqli_fetch_assoc($ID2);    
  $msg2="GEA-ID RECOVERED::"; 
    ?><center><p1><?php echo $msg2;echo $result['ID'];?> </p1></center>  <?php  
         
            
        }
}
    
}
?>  

</body>
</html>