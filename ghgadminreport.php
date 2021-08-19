<?php
include("dbconn.php");
session_start();
$admin=$_SESSION['name']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<style>
    body{
        font-family: sans-serif;
        font-size: 5px;
        color:green;
        background-image: url(ghg13.jpg);
        background-size: 200%;
    }
    h6{
        font-size: 27px;
           color:forestgreen;
        font-family:'bungee';
        margin-top: -56px;
         background-color: rgba(0,0,0,0.8);
        text-shadow: 2px 2px 2px black;
        width: 1421px;
         margin-left: -8px;
    }
    h1{
        font-family: 'bungee';
       
        color:springgreen;
           height:145px;
           margin-top: -55px;
         margin-left: -8px;
        font-size: 73px;
          background-color: rgba(0,0,0,0.5);
 
        text-shadow: 2px 2px 2px black;
        border-bottom: 4px;
        width: 1421px;
        
    }
       h1:hover{
        font-family: 'bungee';
       
        color: deepskyblue;
           height:155px;
        
        font-size: 75px;

        text-shadow: 3px 4px 5px black;
           transition: 0.4s;
        
    }
    img{
        width:90px;
        height:88px;
    }
    .update{
        height:90px;
        width:118px;
        border-radius: 10px;
        font-size: 20px;
        background-color: rgba(0,0,0,0.6);
        color:yellow;
        font-family:'bungee';
    }
     .update2{
        height:90px;
        width:118px;
        border-radius: 15px;
        font-size: 14px;
        background-color: red;
        color:lawngreen;
         font-family:'bungee';
           
    }
      .updatec{
        height:60px;
        width:118px;
        border-radius: 15px;
        font-size: 18px;
        background-color: rgba(0,0,0,0.9);
        color:red;
           box-shadow:  0 0 15px red, 
                             0 0 25px red, 
                               0 0 60px red ;
           text-shadow:  0 0 20px red, 
                             0 0 30px red, 
                               0 0 70px red ;
          
         font-family:'bungee';
           
    }
      .updatea{
        height:60px;
        width:118px;
        border-radius: 15px;
        font-size: 19px;
        background-color:rgba(255,255,0,0.5);
        color:red;
         font-family:'bungee';
           box-shadow:  0 0 15px yellow, 
                             0 0 25px yellow, 
                               0 0 60px yellow ;
           text-shadow:  0 0 20px yellow, 
                             0 0 30px yellow, 
                               0 0 70px yellow;
           
    }
     .updates{
        height:60px;
        width:118px;
        border-radius: 15px;
        font-size: 20px;
        background-color: rgba(64,255,0,0.5);
        color:white;
         font-family:'bungee';
           box-shadow:  0 0 15px lime, 
                             0 0 25px lime, 
                               0 0 60px lime;
           text-shadow:  0 0 20px lime, 
                             0 0 30px lime, 
                               0 0 70px lime;
           
    }
       .table12{
    position:absolute;
    margin-top:490px;
    left:50%;
    width:800px;
    height: 180px;
    padding: 55px;
    transform: translate(-50%, -50%);
   box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
    border-radius: 25px;
   background-color: rgba(0,134,179,0.5);
    background-repeat: no-repeat;
    background-size:cover;
    overflow: hidden;}
   th{
        background-color: rgba(0,0,0,0.9);
        color:darkgreen;
           text-shadow: 1px 1px 1px lime;
         font-size: 28px;
        opacity: .9;
    }
    th:hover{
        background-color:lawngreen;
        color:red;
           text-shadow: 2px 2px 2px red;
         font-size: 28px;
        opacity: .9;
    }
      td{
        background-color: rgba(0,0,0,0.6);
        color:red;
        font-family:sans-serif;
          font-size: 26px;
        text-shadow: 2px 2px 2px darkred;
          text-transform: uppercase;
    }
    td:hover{
        background-color:black;
        color:yellow;
        font-family:sans-serif;
          font-size: 26px;
        text-shadow: 1px 1px 1px black;
    }
    .update:hover{
        background-color:firebrick;
        color:white;
         border-radius: 25px;
          box-shadow:  0 0 25px red, 
                             0 0 50px red, 
                               0 0 100px red ;
transition:  .7s;
    }
    #head{
        height: 130px;
       
        margin-top: -64px;
         padding: 60px;
     width: 1421px;
 background-color: rgba(0,134,179,0.5);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
     background-repeat: no-repeat;
    background-size:cover;
        margin-left: -8px;}
    
    .bt{
        width: 280px;
        height:110px;
        color: red;
        font-family: 'bungee';
        font-size: 26px;
        letter-spacing: 2px;
        border-bottom-color: chartreuse;
        border-left-color: transparent;
          border-right-color: transparent;
        border-top-color: transparent;
        border-radius: 10px;
        margin-top: -41px;  
       background-color: rgba(0,0,0,0.0);
        text-shadow:  3px 3px 3px black; 
                          
    }
    .bt:hover{
         background-color: rgba(0,0,0,0.5);
        color:white;
         box-shadow:  0 0 25px red, 
                             0 0 50px red, 
                               0 0 100px red;
         border-bottom-color: chartreuse;
        border-bottom-style: double;
    transition: 0.7s;
    }
    .sap{
        position: absolute;
    }
    </style>
    <script>
    function hey()
        {
           alert("DATA DELETED!!");
            
                     window.location.href="ghgl6.html"; 
                
            
        }
    </script>
</head>
<body>
   <?php
//echo "$admin";
if(isset($admin))
{
    echo "<div class='container' ";?>
 
   <h1><?php echo"<center><h1> ADMIN-PANEL:<span style='color:red'>RESULTS<span> </h1><br><h6>ADMIN-NAME:<span  style='color:orangered'> ".$admin."</span></h6></center>";?></h1> 
  <form id="head">
      <center><a href="ghgl6.html"> <input type="button" value="&#9851;HOME" class="bt"></a>
          <a href="ghgadminsugg.php">   <input type="button" value="&#9997;SUGGESTIONS" class="bt" ></a>
          <a href="ghglr.html"> <input type="button" value="&#9878;SCRUTINY" class="bt"></a>
        <a href="ghgl5.php"> <input type="button" value="&#9852;EXIT" class="bt"></a>
</center>
      </form>
      <div class="sap"></div>
   <?php
   
    $result=mysqli_query($conn,"SELECT * FROM ghgrate2");
    $row=mysqli_num_rows($result);
     
    
}else
{
    header("location:ghgindexf.html");
}
?>

<div class="container">
     <div id="chart_div" style="width: 400px; height: 120px;"  ></div>       
  <table class="table12" border='1' cellspacing="0">
    <thead>
 
      <tr>
       <th>Sr.No.</th>
        <th>ID</th>
        <th>SECTOR</th>
        <th>FUEL USAGE</th>
         <th>HIGH HEAT</th>
          <th>EMISSION FACTOR</th>
           <th>GLOBAL WARMNG POTENTIAL</th>
             <th>REPORT</th>
              <th>RESULT</th>
              
        </tr>
    </thead>
      <tbody>
      <?php
//include("dbconn.php");
 $query_select="SELECT * FROM ghgrate2";  
            $run_query=mysqli_query($conn, $query_select);
         
      $id=0;    
       $i=0;
         
    while($result= mysqli_fetch_assoc($run_query))  
{ 
        $id=$result["CID"];
        $t=0;
        $t2=0;
            $ef=0.01;
         $query_select2="SELECT CID FROM ghgrate2";  
          $run_query2=mysqli_query($conn, $query_select2);
 while($result2= mysqli_fetch_assoc($run_query2))
 {
     if($id==$result2["CID"])
     {
         $t=1;
     }
 }
        
 $t2= $result["FUEL"] * $result["HH"]*$result["EF"]*$ef ;     
 ?>
 
          
          

    
       
       <tr>
        <td><?php echo $i=$i+1 ?></td>
        <td><?php echo $result["CID"] ?></td>
        <td><?php echo $result["sector"] ?></td>
        <td><?php echo $result["FUEL"] ?></td>
        <td><?php echo $result["HH"] ?></td>
        <td><?php echo $result["EF"] ?></td>
        <td><?php echo $t2 ?></td>
         <!-- <td>&ensp;&ensp;&ensp;&ensp;<?php echo $result["RDATE"] ?></td>
        <td><img src="image/<?php echo $result['image'] ?>"></td> -->  
    
           <?php  
        if($t==0) 
          { echo "<td><a href='ghganalysis.php'><button class='update'>NEW</button></a></td>   "; 
          } 
 else{
     echo "<td><button class='update2'>SCRUTINIZED</button></td>    ";
 } 
            if($t2>=8) 
          { echo "<td><a href='ghgcritical.php'><button class='updatec'>CRITICAL</button></a></td>   "; 
            
          } 
 else if($t2<8 && $t2>=5){
     echo "<td><a href='ghgalert.php'><button class='updatea'>ALERT</button></a></td>    ";
      
 }
        else{
     echo "<td><a href='ghgsafe.php'><button class='updates'>SAFE</button></a></td>    ";
    
        }
           
           ?>
           
      </tr>
      <?php } ?>
     <tr> <td colspan="11"> <?php   echo "TOTAL ROWS: ".$row; ?></td></tr>
       </tbody>
        </table>
    </div>

</body>
</html>
