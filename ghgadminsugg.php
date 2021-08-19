<?php
include("dbconn.php");
session_start();
$admin=$_SESSION['name'];
    $_SESSION['name']=$admin;
?>
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
    
    background-size:190%;;
           
    }
    h1{
        font-family: 'bungee';
       
        color:seagreen;
           height:155px;
           margin-top: -45px;
        margin-left: -8px;
        font-size: 73px;
     text-shadow: 2px 2px 2px lime;
        border-bottom: 4px;
        width: 1350px;
         background-color: rgba(0,0,0,0.7);
        
    }
       h1:hover{
        font-family: 'bungee';
       
        color: darkolivegreen;
           height:155px;
        
        font-size: 75px;

        text-shadow: 3px 3px 4px lime;
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
        background-color: transparent;
        color:lime;
    }
       .table12{
    position:absolute;
    top: 130%;
    left:53%;
    width:800px;
    height: 180px;
    padding: 55px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.4);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
    border-radius: 25px;
       
    }
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
        background-color:lawngreen;
        color:darkgreen;
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
        height: 150px;
        background-color: aliceblue;
        margin-top: -60px;
         padding: 60px;
     width: 1350px;
    background-color: rgba(0,0,0,0.7);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
margin-left: -8px;
            
    background-repeat: no-repeat;
    background-size:cover; }
    
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
        margin-top: -21px;  
       background-color: rgba(0,0,0,0.0);
        text-shadow:  3px 3px 3px black; 
                             
    }
    .bt:hover{
        background-color: rgba(0,0,0,0.5);
        color:white;
         box-shadow:  0 0 25px orangered, 
                             0 0 50px orangered, 
                               0 0 100px orangered;
        border-bottom-color: chartreuse;
        border-bottom-style: double;
           
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
     
   <h1><?php echo"<h1> <center>ADMIN-PANEL:<span style='color:white'>SUGGESTON<span></center> </h1><br>";?></h1> 
  <form id="head">
      <center><a href="ghgl6.html"> <input type="button" value="&#9851;HOME" class="bt"></a>
    <input type="button" value="&#9997;SUGGESTIONS" class="bt" >
          <a href="ghglr.html">   <input type="button" value="&#9878;SCRUTINY" class="bt"></a>
        <a href="ghgindexf.html"> <input type="button" value="&#9852;EXIT" class="bt"></a>
</center>
      </form>
  <div class="sap"></div>
   <?php
   $row=0;
    $result=mysqli_query($conn,"SELECT * FROM ghgsugg where CNAME!=' ' ");
    $row=mysqli_num_rows($result);
  
    
}else
{
    header("location:ghgindexf.html");
}
?>
<div class="container">
     <div id="chart_div" style="width: 400px; "  ></div>       
  <table class="table12" border='1' cellspacing="0">
    <thead>

      <tr>
       <th>Sr.No.</th>
        <th>NAME</th>
        <th>SUGGESTION</th>
       
        </tr>
    </thead>
      <tbody>
      <?php
//include("dbconn.php");
 $query_select="SELECT * FROM ghgsugg where CNAME!=' ' ";  
            $run_query=mysqli_query($conn, $query_select);
      $id=0;    
       $i=0;
    while($result= mysqli_fetch_assoc($run_query))  
{ ?>
       
       
       <tr>
        <td><?php echo $i=$i+1 ?></td>
       
        <td><?php echo $result["CNAME"] ?></td>
        <td><?php echo $result["SUGG"] ?></td>
        
      </tr>
      <?php } ?>
     <tr> <td colspan="3"> <?php   echo "TOTAL ROWS: ".$row; ?></td></tr>
       </tbody>
        </table>
    </div>

</body>
</html>
