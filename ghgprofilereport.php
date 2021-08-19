
<?php
session_start();
include ("dbconn.php");

//($_SESSION['name']))

$uname=$_SESSION[ 'name' ];
$_SESSION[ 'name' ]=$uname;
$result=mysqli_query($conn,"SELECT ID,ESTD,sector,image,RDATE from ghgreg where CNAME='$uname' ");
$retrieve=mysqli_fetch_array($result);
//print_r($retrive);
$UID=$retrieve['ID'];
$ESTD=$retrieve['ESTD'];
$sector=$retrieve['sector'];
$image=$retrieve['image'];
$date=$retrieve['RDATE'];

?>
<!DOCTYPE html>

    

<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <meta charset="UTF-8">
    <title>PROFILE</title>
    <style type="text/css">
        #body-bg{
            background-color: darkgrey;
        }
        body{
            background-image: url(ghgb4.png);
            background-size: 10%;
            font-family: 'bungee';
            color:transparent;
            font-size: 5px;
        }
        .top{
            font-family: 'bungee';
            font-size: 40px;
            color:limegreen;
            text-shadow: 4px 4px 2px black;
            
            margin-top: -20px;
            margin-left: -8px;
            
              background-image: url(ghgb2.jpg);
            background-size: 13%;
            width:1366px;
            height:128px;
            
        }
          .topi{
            font-family: 'bungee';
            font-size: 38px;
            color:darkred;
            text-shadow: 2px 1px 1px black;
             background-image:linear-gradient(to right,rgba(0,0,0,0.9),rgba(255,255,0,0.5),rgba(255,255,0,0.6),rgba(255,255,0,0.2));
            margin-top: -164px;
            margin-left: -8px;
        
            width:1366px;
            height:132px;
            
        }
           .tdb{
            font-family: 'bungee';
            font-size: 38px;
            color:darkred;
            text-shadow: 2px 1px 1px black;
            
            margin-top: -27px;
            margin-left: -8px;
            background-color: rgba(26,255,26,0.2);
            width:1366px;
            height:78px;
            
        }
        .top1{
            font-family:  monospace;
            background-color: rgba(0,0,0,0.2);
            font-size: 29px;
            height:30px;
            color:chartreuse;
            text-shadow: 2px 1px 1px black;
            letter-spacing: 3px;
            margin-top: -26px;
             margin-left: -8px;
            text-transform: uppercase;
             width:1366px;
        }
        .btn{
            width:150px;
            height:60px;
            border-radius: 5px;
            background-color:rgba(0,51,0,0.0);
            color:red;
            font-family: 'bungee';
            font-size: 20px;
            margin-top:-490px;
            border-top-color: transparent;
             border-left-color: transparent;
             border-right-color: transparent;
             border-bottom-color: red;
              text-shadow: 2px 1px 1px black;
            
        }
        .btn:hover{
            width:150x;
            border-radius: 5px;
            background-color:rgb(0,51,0,0.0);
            color:white;
            text-shadow: 0px 0px 10px orangered,0px 0px 20px orangered,0px 0px 40px orangered;
            font-family: 'Bungee';
            font-size: 22px;
              transition: 0.7s;  
        }
        img{
            border-radius: 50%;
            margin-left: 120px;
            height: 140px;
            border-style: groove;
            border-color: darkgoldenrod;
            
            margin-top: 86px;
            
        }
         img:hover{
            border-radius: 50%;
            margin-left: 120px;
            height: 142px;
            border-style:ridge;
            border-color: greenyellow;
             }
                

  
          @keyframes animatebottom2{ 
            from{ 
                     width:100px;     }
           to{width:400px;    }}
        span{
            color:maroon;
            letter-spacing: 6px;
            text-shadow: 3px 3px 3px black;
              
        }
         @keyframes animatebottom3{ 
            from{ 
                     opacity:0;   }
           to{opacity:1;}}
         .tdb1{
            width:262px;
            height:62px;
        
            background-color:transparent;
            color:darkgreen;
            font-family: 'BUNGEE';
            font-size: 26px;
              text-shadow: 2px 2px 2px black;
            border-top-color: transparent;
             border-left-color: transparent;
              border-right-color: transparent;
            
        }
          .tdb1:hover{
            width:262px;
            height:62px;
              border-bottom-color: red;
        
            background-color:rgba(26,255,26,0.0);
            color:white;
              text-shadow: 1px 1px 1px black,0px 0px 10px,0px 0px 20px,0px 0px 25px orangered;
            font-family: 'BUNGEE';
            font-size: 28px;
            
          transition: 0.4s;  
        }
        .card{
            font-size: 35px;
            background-color: rgba(0,0,0,0.8);
            margin-top: 310px;
            height:500px;
            width:310px;
        }
        .head{
            margin-top: 30px;
            font-family: fantasy;
            font-size: 55px;
            color:maroon;
             text-shadow: 3px 3px 3px black;
            background-color: rgba(255,255,0,0.6); 
        }
          .headx{
            margin-top: 30px;
            font-family: monospace;
            font-size: 55px;
            color:yellow;
             text-shadow: 2px 2px 2px black;
            background-color: rgba(51,255,51,0.8); 
        }
        .p2{
            font-size: 30px;
        color:red;
        }
            .table12{
    position:absolute;
    top: 65%;
    left:2%;
    width:1300px;
    height: 2000px;
    padding: 35px;
    
    background: rgba(255,51,0,0.6);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
    border-radius: 25px;
       
    }
            .table13{
    position:absolute;
    top: 100%;
    left:56%;
    width:400px;
    height: 50px;
    padding: 35px;
    
    background: rgba(255,255,0,0.4);
    box-sizing:border-box;
   border-radius: 25px;
      
    }
       
         .alertss{
        height:60px;
         width:140px;
        border-radius: 15px;
        font-size: 14px;
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
           .alertcs{
        height:60px;
        width:140px;
        border-radius: 15px;
        font-size: 14px;
              
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
      .alertas{
        height:60px;
        width:140px;
        border-radius: 15px;
        font-size: 14px;
          
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
        
          th{
        background-color: rgba(44,255,0,0.2);
        color:darkgreen;
           text-shadow: 2px 1px 1px black;
         font-size: 28px;
      
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
        font-family:'bungee';
          font-size: 26px;
        text-shadow: 2px 2px 2px darkred;
          text-transform: uppercase;
    }
    td:hover{
        background-color:lawngreen;
        color:darkgreen;
        font-family:'bungee';
          font-size: 26px;
        text-shadow: 1px 1px 1px black;
    }
        .cart{
            margin-left: -17px;
            margin-top: -20px;
        }
           .cart:hover{
            margin-left: -17px;
            margin-top: -20px;
               
        }
     
        .trp{
            margin-top: -40px;
            margin-left: 540px;
            height:250px;
           background-color: rgba(0,0,0,0.4);
        }
            .trp:hover{
            margin-top: -40px;
         margin-left: 540px;
                height:250px;
        }
         .alertc{
        height:60px;
        width:935px;
        border-radius: 15px;
        font-size: 22px;
               letter-spacing: 16px;
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
        width:935px;
        border-radius: 5px;
        font-size: 22px;
          letter-spacing: 16px;
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
         width:935px;
        border-radius: 15px;
        font-size: 22px;
                  letter-spacing: 16px;
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
        #rt{
            color:red;
            background-color: white;
            text-shadow: 1px 1px 1px black;
             background-image: url(ghg4.jpg);
        }
        #diablo{
            background-image: url(ghg1.jpg);
        }
         #print{
        height:60px;
         width:935px;
        border-radius: 15px;
        font-size: 22px;
                  letter-spacing: 16px;
        background-color:lime;
        color:orangered;
         font-family:'bungee';
           
                           
           text-shadow:  2px 2px 2px black; 
                             
           
    }
        #det{
            font-size: 14px;
        }

    </style>
    <script>
    function msg()
    {
    var v=confirm("IS IT OKAY TO LOG OUT FROM YOUR PROFILE? ");
        if(v==true)
            {
      var sug=confirm("ANY SUGGESTION FOR THE GOVERNMENT, THAT MAY HELP INDIA IN GHG ATTRITION?");
     if(sug==false)
         {
alert("THANKYOU LOGGING OUT!!"); 
               window.location.href="ghgl5.php";
         }
                else{
             window.location.href="ghgsugg.php";
                }
                }
        else{
            alert("LOG OUT ABORTED!!");
        }
    }
        </script>
</head>
<body id="body-bg">
    
        
        <h1 class="top" align='center'>   
<input type="submit" class="btn" style="float:right;  margin-top:60px;"   value="&#x262F;LOGOUT" onclick="msg()"/>
            &emsp;&emsp;<span>WELCOME </span><?php echo strtoupper($uname); ?> 
        </h1>
      <h1 class="topi" align='center'>  <img src="image/<?php echo $image ?>" style="width:150px; align:'left' ">
       </h1>
       <h1 class="tdb"><a href="ghgprofile.php"><button class="tdb1" ><span>&#x2605;</span>HOME</button></a><button class="tdb1" ><span>&#9850;</span>REPORT</button> 
           &emsp; &nbsp; &nbsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="ghga/petition.html"><button class="tdb1" ><span>&#x260D;</span>PETITION</button></a><a href="gallery.html"><button class="tdb1" ><span>&#x2618;</span>GALLERY</button></a> </h1>
    
    <h1 class="top1" align='left'>  <marquee direction="left">
              &emsp; <span>REGISTERED ON:</span><?php echo $date; ?>
              &emsp; <span>ESTABLISHED:</span><?php echo $ESTD; ?>
               &emsp;    <span>SECTOR:</span><?php echo $sector; ?></marquee></h1> 
 
 
             <div class="container">
     <div id="chart_div" style="width: 400px; "  ></div>       
  <table class="table12" border='1' cellspacing="0">
 
      <tbody>
      <?php
//include("dbconn.php");
 $query_select2="SELECT * FROM ghgrate2 where CID='$UID' ";  
            $run_query2=mysqli_query($conn, $query_select2);
       
          
          $row=mysqli_num_rows(  $run_query2);
          
              if($row==0)
   {
    echo " <div class='headx'><center><p>TOTAL REPORTS FOUND::$row<br><span class='p2'>YOUR COMPANY IS STILL BEING STUDIED PLEASE VISIT LATER</span></center></div> ";?>  <thead><?php $query_select4="SELECT * FROM ghgreg where ID='$UID' ";  
            $run_query4=mysqli_query($conn, $query_select4);
          $result4= mysqli_fetch_assoc($run_query4); ?>
                   <tr>
      <td  colspan="5" style="height:30px;"><center><p><?php echo $result4["CNAME"] ?>&emsp;STATUS:->UNSCRUTINIZED</p><img class="cart" src="image/<?php echo $result4["image"] ?>" style="width:150px; "></center></td>
          </tr> </thead><?php 
   } else{ 
               echo "<div class='head'><center><p>YOUR COMPANY HAS BEEN SCRUTINIZED. <br><span class='p2'>THE REPORT HAS BEEN GENERATED AS PER THE NORMS OF THE ORGANIZATON.</span></center></div>";  
                 $query_select3="SELECT * FROM ghgrate2 where CID='$UID' ";  
            $run_query3=mysqli_query($conn, $query_select3);
          $query_select4="SELECT * FROM ghgreg where ID='$UID' ";  
            $run_query4=mysqli_query($conn, $query_select4);
          $result4= mysqli_fetch_assoc($run_query4);
          $result3= mysqli_fetch_assoc($run_query3);?>
    <thead>
                   <tr>
      <td  colspan="5" style="height:30px;" id="diablo"><center><p><?php echo $result4["CNAME"] ?></p><img class="cart" src="image/<?php echo $result4["image"] ?>" style="width:150px; "></center></td>
      </tr>
      <tr>
        
          
        <th>FUEL USAGE</th>
        <th>H.H.V.</th>
        <th>E.F.</th>
       <th>GLOBAL WARMING POTENTIAL</th>
        </tr>
    </thead>                
                      
     <?php $stat= $result3["FUEL"] *$result3["HH"]*$result3["EF"]; ?>
                      <tr>
        
       
 
        <td><?php echo $result3["FUEL"] ?></td>
        <td><?php echo $result3["HH"] ?></td>
        <td><?php echo $result3["EF"] ?></td>
         <td><?php echo $result3["EF"]*$result3["HH"]*$result3["FUEL"] ?>/1000</td>
      </tr>
    
      
     <tr><th colspan="2">REG-DATE</th>
      <td  colspan="3"><?php echo $result4["RDATE"]; ?></td>
      </tr>
        <tr><th colspan="2">ESTABLISHED</th>
      <td  colspan="3"><?php echo  $result4["ESTD"];  ?></td>
      </tr>
        <tr><th colspan="2">SECTOR</th>
      <td  colspan="3"><?php echo  $result4["sector"]; ?></td>
      </tr>
       
        <tr><th colspan="2">STATUS<span id="det"><br> (CLICK FOR DETAILS)</span></th>
      <td  colspan="3"><?php if($stat<500)
          {
              echo "<center><a href='ghga/safe.html'><button class='alerts'>SAFE</button></center></a>";
          }else if($stat>=500 && $stat<800){
 echo "<center><a href='ghga/alert.html'><button class='alerta'>ALERT</button></a></center>";              
          }else{
    echo "<center><a href='ghga/critical.html'><button class='alertc'>CRITICAL</button></a></center>";     
    
}?></td>
      </tr>
          
  
       
     
     <tr><th colspan="2">EMISSON CHART<br>G.W.P.=<?php echo $stat?></th>
    <td  colspan="3">
        <center> <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
           var data = google.visualization.arrayToDataTable([
          ['CAT','VAL'], 

      <?php   
                $query_select5="SELECT * FROM ghgrate2 where CID='$UID' ";  
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
              slices:{0:{color:'#ff6600'},1:{color:'#ff3300'},2:{color:'#661400'}},
            hAxis: { textStyle:{ color: '#000' }
                   } }
             var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
          }
        </script><div id="piechart" style="width: 900px; height: 500px;">
     
    
    
            </div></center>     </td></tr> 
         <tr>   <th colspan="2">IDEAL EMISSION<br>G.W.P.<500</th>
            <td colspan="3"><script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["F.U.", 5, "white"],
        ["H.H.V.", 4, "orangered"],
        ["E.F.", 6, "red"]
       
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "IDEAL EMISSON CHART GWP<500",
           backgroundColor: 'transparent' ,
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
                <div id="barchart_values" style="width: 600px; height: 400px;"></div></td></tr>
          <tr><th id="rt" colspan="2">WHAT DOES YOUR REPORT MEAN</th><td id="rt" colspan="3">&#x261E;IF (F.U.*H.H.V.*E.F.)=G.W.P.<500-------------STATUS:&emsp;<button class="alertss">SAFE</button><br>&#x261E;IF (F.U.*H.H.V.*E.F.)=G.W.P.>=500 AND <800 STATUS:<button class='alertas'>ALERT</button><br>&#x261E;IF (F.U.*H.H.V.*E.F.)=G.W.P.>800----->STATUS:&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<button class='alertcs'>CRITCAL</button></td></tr>
    <tr><th colspan="2">PRINT REPORT</th>
      <td  colspan="3"><button id="print" onclick="window.print()">PRINT/DOWNLOAD</button></td>
      </tr>
       </tbody>
        </table>
    </div>
           
       <?php } ?>
   
    
    
</body>
</html>