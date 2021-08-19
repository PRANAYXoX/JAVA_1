<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>INDIA CLASSIFIED WEAPONS!!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    h2{ text-shadow: 3px 3px  8px red, 2px 2px 5px yellow;
     }
    th{  color:orangered;  text-shadow:4px 4px  4px greenyellow ; font-size: 40px;
     }
    a{  text-shadow: 1px 1px  2px white };
    img{ float:left;  }
     td{  color:red;  font-size: 30px;
     }
      p1{  color:orangered;  text-shadow:2px 2px  3px greenyellow ; font-size: 30px;
     }
    input[type=submit] {
   width: 23%;
   padding:6px 6px;
   margin:8px 5px;
   boxing-sizing: border-box;
          border:4px solid red;
          background-color:black;
        color:darkorange;}
      
    
      
    body{
        background-color: black;
     background-image:url('mini.gif'), url('wa5.gif');
  background-attachment: fixed,fixed;
    background-repeat:no-repeat, no-repeat;
    background-position:right top, center;
    background-size:45%, 45%;   
    }
    
    input[type=submit] {
   width: 23%;
   padding:6px 6px;
   margin:8px 5px;
   boxing-sizing: border-box;
          border:4px solid red;
          background-color:black;
        color:darkorange;}
    
    
    </style>
<link href='https://fonts.googleapis.com/css?family=Gravitas One' rel='stylesheet'>
<style>
   body {
   


        
        font-family: 'Gravitas One';font-size: 18px;  color:darkorange;

}
</style>
</head>
<body>
 <img src="indianewflag.gif" alt="Cinque Terre" width="300"  height="200"> 
<div class="container">
    <h2><b>NUCLEAR ARSENAL INDIA</b></h2>
  <p>Classified Information</p>            
  <table class="table table-bordered table table-hover">
    <thead>
      <tr>
        <th>A</th>
        <th>&emsp;&emsp;B</th>
       
          
       
        </tr>
    </thead>
    <tbody>
      
    <?php
include("dbconn.php");
 $query_select2="SELECT A*B as GHG from exp";  
         $query_select="SELECT * FROM exp";  
   $vol =10;
        $run_query=mysqli_query($conn, $query_select);     
         $run_query2=mysqli_query($conn, $query_select2);     
       $resulti= mysqli_fetch_assoc($run_query2);
     $query_select3="UPDATE exp SET MUL=$resulti WHERE A='10' "; 
        $run_query3=mysqli_query($conn, $query_select3);  
    while($result= mysqli_fetch_assoc($run_query))
{   ?>
     
       
       <tr>
       <td><?php echo $result["A"] ?></td>
       <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $result["B"] ?></td>
        
      </tr>
     
       <?php }   ?>
    
    </tbody>
  </table>
</div>
    <td><p1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;TOTAL WEAPONS IN THE ACTIVE ARSENAL:<?php echo $resulti["GHG"] ?></p1></td>
<form method="post" action="indiachart.php">
<input type="submit" class="btn btn-primary" value="CHART">
    
</form> 
<form method="post" action="index.php">
<input type="submit" class="btn btn-primary" value="REVERT">
    <a href="https://www.nti.org/learn/countries/india/nuclear/"><B> HISTORICAL DATA</B></a>
</form> 
<audio autoplay >
  <source src="cry2.mp3" >
  
</audio>

</body>
</html>