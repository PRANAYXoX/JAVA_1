
<?php
session_start();
include ("dbconn.php");

//($_SESSION['name']))

$uname=$_SESSION[ 'name' ];
$_SESSION[ 'name' ]=$uname;
$result=mysqli_query($conn,"SELECT ESTD,sector,image,RDATE from ghgreg where CNAME='$uname' ");
$retrieve=mysqli_fetch_array($result);
//print_r($retrive);
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
            color:darkorange;
            text-shadow: 4px 4px 2px black;
            
            margin-top: -20px;
            margin-left: -8px;
            
              background-image: url(ghgb2.jpg);
            background-size: 13%;
            width:1366px;
            height:127px;
            
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
            color:darkolivegreen;
            font-family: 'bungee';
            font-size: 20px;
            margin-top:-520px;
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
            width:260px;
            height:62px;
        
            background-color:transparent;
            color:darkgreen;
            font-family: 'BUNGEE';
            font-size: 25px;
              text-shadow: 2px 2px 2px black;
            border-top-color: transparent;
             border-left-color: transparent;
              border-right-color: transparent;
            
        }
          .tdb1:hover{
            width:260px;
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
        .p2{
            font-size: 30px;
        color:red;
        }
            .table12{
    position:absolute;
    top: 100%;
    left:2%;
    width:400px;
    height: 50px;
    padding: 35px;
    
    background: rgba(0,0,0,0.6);
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
    
    background: rgba(0,0,0,0.4);
    box-sizing:border-box;
   border-radius: 25px;
      
    }
       
         .alerts{
        height:60px;
         width:270px;
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
          th{
        background-color: rgba(64,255,0,0.3);
        color:orangered;
           text-shadow: 2px 2px 2px black;
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
    <h1 class="tdb"><a href="ghgprofile.php"><button class="tdb1" ><span><b>&#x2605;</b></span>HOME</button></a><a href="ghgprofilereport.php"><button class="tdb1" ><span>&#9850;</span>REPORT</button></a> 
        &emsp; &nbsp; &nbsp;  &emsp;&emsp;&emsp;&emsp;&emsp;<a href="ghga/petition.html"><button class="tdb1" ><span>&#x260D;</span>PETITION</button></a><a href="gallery.html"><button class="tdb1" ><span>&#x2618;</span>GALLERY</button></a> </h1>
    
    <h1 class="top1" align='left'>  <marquee direction="left"><span>REGISTERED ON:</span><?php echo $date; ?>
              &emsp; <span>ESTABLISHED:</span><?php echo $ESTD; ?>
               &emsp;    <span>SECTOR:</span><?php echo $sector; ?></marquee></h1> 
 <div class="head"><center><p>TOP 2 ECO-FRIENDLY COMPANIES IN INDIA <br><span class="p2">THE NATION SALUTES THEIR EFFORTS TO SECURE OUR COUNTRY FROM PERILOUS G.H.G. </span></center></div>
 
             <div class="container">
     <div id="chart_div" style="width: 400px; "  ></div>       
  <table class="table12" border='1' cellspacing="0">
 
      <tbody>
      <?php
//include("dbconn.php");
 $query_select2="SELECT * FROM ghgrate2 ";  
            $run_query2=mysqli_query($conn, $query_select2);
       
       $i=1000;
          $id=0;
    
    while($result= mysqli_fetch_assoc($run_query2))  
{ 
          if(($result["EF"]*$result["HH"]*$result["FUEL"] )<$i){ $stat=$result["EF"]*$result["HH"]*$result["FUEL"]; $i=$stat;
          $id= $result["CID"]; }
    }
              
                 $query_select3="SELECT * FROM ghgrate2 where CID='$id' ";  
            $run_query3=mysqli_query($conn, $query_select3);
          $query_select4="SELECT * FROM ghgreg where ID='$id' ";  
            $run_query4=mysqli_query($conn, $query_select4);
          $result4= mysqli_fetch_assoc($run_query4);
          $result3= mysqli_fetch_assoc($run_query3);?>
    <thead>
                   <tr>
      <td  colspan="5" style="height:30px;"><center><p><?php echo $result4["CNAME"] ?></p><img class="cart" src="image/<?php echo $result4["image"] ?>" style="width:150px; "></center></td>
      </tr>
      <tr>
        
          
        <th>FUEL USAGE</th>
        <th>H.H.V.</th>
        <th>E.F.</th>
       <th>G.W.P.</th>
        </tr>
    </thead>                
                      
     
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
       
        <tr><th colspan="2">STATUS</th>
      <td  colspan="3"><?php if($stat<500)
          {
              echo "<center><button class='alerts'>SAFE</button></center>";
          }else if($stat>=500 && $stat<800){
 echo "<button class='alerta'>ALERT</button>";              
          }else{
    echo "<button class='alertc'>CRITICAL</button>";     
    
}?></td>
      </tr>
          
  
       
     
       </tbody>
        </table>
    </div>
                <div class="container">
     <div id="chart_div" style="width: 400px; "  ></div>       
  <table class="table13" border='1' cellspacing="0">
  
      <tbody>
      <?php
//include("dbconn.php");
 $query_select2h="SELECT * FROM ghgrate2 where CID!='$id' ";  
            $run_query2h=mysqli_query($conn, $query_select2h);
       
       $i=1000;
          $id2=0;
    
    while($result2h= mysqli_fetch_assoc($run_query2h))  
{ 
          if(($result2h["EF"]*$result2h["HH"]*$result2h["FUEL"] )<$i){ $stat2=$result2h["EF"]*$result2h["HH"]*$result2h["FUEL"]; $i=$stat2;
          $id2= $result2h["CID"]; }
    }
              
                 $query_select3h="SELECT * FROM ghgrate2 where CID='$id2' ";  
            $run_query3h=mysqli_query($conn, $query_select3h);
          $query_select4h="SELECT * FROM ghgreg where ID='$id2' ";  
            $run_query4h=mysqli_query($conn, $query_select4h);
          $result4h= mysqli_fetch_assoc($run_query4h);
          $result3h= mysqli_fetch_assoc($run_query3h);?>
    <thead>
                   <tr>
      <td  colspan="5" style="height:30px;"><center><p><?php echo $result4h["CNAME"] ?></p><img class="cart" src="image/<?php echo $result4h["image"] ?>" style="width:150px; "></center></td>
      </tr>
         
        <tr>
        
       
        <th>FUEL USAGE</th>
        <th>H.H.V.</th>
        <th>E.F.</th>
       <th>G.W.P.</th>
        </tr>
    <img src="trop9.gif" class="trp">
                     </thead>                
                      
     
                      <tr>
        
       
      
        <td><?php echo $result3h["FUEL"] ?></td>
        <td><?php echo $result3h["HH"] ?></td>
        <td><?php echo $result3h["EF"] ?></td>
         <td><?php echo $result3h["EF"]*$result3h["HH"]*$result3h["FUEL"] ?>/1000</td>
      </tr>
    
      
     <tr><th colspan="2">REG-DATE</th>
      <td  colspan="3"><?php echo $result4h["RDATE"]; ?></td>
      </tr>
        <tr><th colspan="2">ESTABLISHED</th>
      <td  colspan="3"><?php echo  $result4h["ESTD"];  ?></td>
      </tr>
        <tr><th colspan="2">SECTOR</th>
      <td  colspan="3"><?php echo  $result4h["sector"]; ?></td>
      </tr>
       
        <tr><th colspan="2">STATUS</th>
      <td  colspan="3"><?php if($stat2<500)
          {
              echo "<center><button class='alerts'>SAFE</button></center>";
          }else if($stat2>=500 && $stat2<800){
 echo "<button class='alerta'>ALERT</button>";              
          }else{
    echo "<button class='alertc'>CRITICAL</button>";     
    
}?></td>
      </tr>
          
  
       
     
       </tbody>
        </table>

       </div>
       
       
   
    
    
</body>
</html>