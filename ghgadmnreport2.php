<?php
session_start();
$id=$_SESSION['user'];
$stat=$_SESSION['stat'];
include("dbconn.php");
include("ghgfnc.php");
?>
<!DOCTYPE html>
<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-size: 5px;
            background-image:linear-gradient(to right,darkslategray,grey,white);
            background-size: 120%;
        }
          .table12{
    position:absolute;
    top: 65%;
    left:31%;
    width:800px;
    height: 450px;
    padding: 55px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.5);
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
        background-color: rgba(0,0,0,0.7);
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
        h1{
            text-transform: uppercase;
        }
        h2{
            width:1366px;
            height:107px;
            margin-left: -8px;
            text-shadow: 2px 2px 2px black;
            background-color: rgba(0,0,0,0.8);
            font-size: 60px;
            font-family: 'bungee';
            color:darkgoldenrod;
            margin-top: -13px;
        }
        img{
            border-radius: 50px;
            border-style: groove;
            border-color: darkred;
            height:100px;
            width:60px;
            margin-top: -153px;
        }
        h1{
            font-family:'bungee';
            font-size: 30px;
        }
          .alertc{
        height:60px;
        width:480px;
        border-radius: 15px;
        font-size: 18px;
        background-color: rgba(0,0,0,0.9);
        color:red;
           box-shadow:  0 0 8px red, 
                             0 0 15px red, 
                               0 0 30px red ;
           text-shadow:  0 0 20px red, 
                             0 0 30px red, 
                               0 0 70px red ;
          
         font-family:'bungee';
           
    }
      .alerta{
        height:60px;
        width:480px;
        border-radius: 5px;
        font-size: 19px;
        background-color:rgba(255,255,0,0.9);
        color:red;
         font-family:'bungee';
           box-shadow:  0 0 8px orangered, 
                             0 0 15px orangered, 
                               0 0 30px orangered;
           text-shadow:  0 0 20px orangered, 
                             0 0 30px orangered, 
                               0 0 70px orangered;
           
    }
     .alerts{
        height:60px;
         width:480px;
        border-radius: 15px;
        font-size: 20px;
        background-color: rgba(64,255,0,0.9);
        color:white;
         font-family:'bungee';
           box-shadow:  0 0 8px lime, 
                             0 0 15px lime, 
                               0 0 30px lime;
           text-shadow:  0 0 20px lime, 
                             0 0 30px lime, 
                               0 0 70px lime;
           
    }
         .bt{
        width: 280px;
        height:60px;
        color: red;
        font-family: 'bungee';
        font-size: 30px;
        letter-spacing: 2px;
        border-bottom-color: chartreuse;
        border-left-color: transparent;
          border-right-color: transparent;
        border-top-color: transparent;
        border-radius: 10px;
        margin-top: -23px;  
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
         #head{
        height: 50px;
        background-color: aliceblue;
        margin-top: -50px;
         padding: 35px;
     width: 1366px;
    background-color: rgba(0,0,0,0.7);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
margin-left: -8px;
            
    background-repeat: no-repeat;
    background-size:cover; }
        #piechart{
            margin-top: 13px;
            margin-left: 53%;
            color:yellow;
        }
       
    </style>
   
</head>
<body>
    <?php
     $query_select="SELECT * FROM ghgreg where ID='$id' ";
       $run_query=mysqli_query($conn, $query_select);
       $retrieve= mysqli_fetch_assoc($run_query);
    $uname=$retrieve['CNAME'];
    $ESTD=$retrieve['ESTD'];
$sector=$retrieve['sector'];
$image=$retrieve['image'];
$date=$retrieve['RDATE'];
    $email=$retrieve['email'];
?>
             
     <h2><center>&emsp;&emsp;&emsp;<?php echo $uname; ?> </center> <img src="image/<?php echo $image ?>" style="width:150px; align:'left' "></h2> 
      <form id="head">
      <center><a href="ghgl6.html"> <input type="button" value="&#9851;HOME" class="bt"></a>
    <input type="button" value="SUGGESTIONS" class="bt" >
          <a href="ghglr.html">   <input type="button" value="SCRUTINY" class="bt"></a>
        <a href="ghgl5.php"> <input type="button" value="&#9852;EXIT" class="bt"></a>
</center>
      </form>
<!------------------------------------------------------------------------------------------>
             <div class="container">
     <div id="chart_div" style="width: 400px; "  ></div>       
  <table class="table12" border='1' cellspacing="0">
    <thead>

      <tr>
        
       <th>CID</th>
        <th>FUEL U.</th>
        <th>H.H.V.</th>
        <th>E.F.</th>
       <th>G.W.P.</th>
        </tr>
    </thead>
      <tbody>
      <?php
//include("dbconn.php");
 $query_select2="SELECT * FROM ghgrate2 where CID='$id ' ";  
            $run_query2=mysqli_query($conn, $query_select2);
       
       $i=0;
        $name="HIGH HEAT";
    while($result= mysqli_fetch_assoc($run_query2))  
{ ?>
       
       
       <tr>
        
       
        <td><?php echo $result["CID"] ?></td>
        <td><?php echo $result["FUEL"] ?></td>
        <td><?php echo $result["HH"] ?></td>
        <td><?php echo $result["EF"] ?></td>
         <td><?php echo $result["EF"]*$result["HH"]*$result["FUEL"] ?>/1000</td>
      </tr>
      <?php } ?>
     <tr><th colspan="2">REG-DATE</th>
      <td  colspan="3"><?php echo $date; ?></td>
      </tr>
        <tr><th colspan="2">ESTABLISHED</th>
      <td  colspan="3"><?php echo $ESTD; ?></td>
      </tr>
        <tr><th colspan="2">SECTOR</th>
      <td  colspan="3"><?php echo $sector; ?></td>
      </tr>
          <tr><th colspan="2">EMAIL</th>
    <td  colspan="3"> <?php echo $email; ?></td>
      </tr>
        <tr><th colspan="2">STATUS</th>
      <td  colspan="3"><?php if($stat=="safe")
          {
              echo "<center><button class='alerts'>SAFE</button></center>";
          }else if($stat=="alert"){
 echo "<button class='alerta'>ALERT</button>";              
          }else{
    echo "<button class='alertc'>CRITICAL</button>";     
    
}?></td>
      </tr>
       </tbody>
        </table>
    </div>
     
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
           var data = google.visualization.arrayToDataTable([
          ['CAT','VAL'], 

      <?php   
                $query_select5="SELECT * FROM ghgrate2 where CID='$id' ";  
            $run_query5=mysqli_query($conn, $query_select5);
       $st=["FUEL USAGE","HIGH HEAT VALUE","EMISSON FACTOR"] ;       
       $result5= mysqli_fetch_assoc($run_query5);
            
$fuel=[$result5["FUEL"],$result5["HH"],$result5["EF"] ];
  for($j=0;$j<3;$j++){
        echo "[' " .$st[$j]. " ', " .$fuel[$j]. " ],"; 
 
  }?>
      
           
        ]);
         
          var options = {
          title: "EMISSION CHART",
        backgroundColor: 'transparent' ,
              is3D:true,
              slices:{0:{color:'green'},1:{color:'yellowgreen'},2:{color:'forestgreen'}},
            hAxis: { textStyle:{ color: '#000' }
                   } }
             var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
          }
    </script>
 
  
   <div id="piechart" style="width: 800px; height: 600px;">
     
    
    
   </div>
              
          
           
             </body>
</html>