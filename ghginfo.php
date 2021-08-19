<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Gravitas One' rel='stylesheet'>
   <head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
    th{  color:yellow; text-shadow:  1px 2px  3px lime;
        font-size: 30px;
        font-family: sans-serif;
        letter-spacing: 4px;
     }
       td{  color:firebrick;
        font-size: 22px;
           font-family: fantasy;
     }
     td:hover{  color:red; 
        font-size: 20px;
           font-family:cursive;
     }
    table{
        width: 1000px;
        height:800px;
        margin-right: 50px;
    }
     body{
        background-color:darkolivegreen;
       font-family: 'Gravitas One';font-size: 18px;  color:orangered;
 
    }
    </style>
</head>

  <body>
   
    <div class="container">
     <div id="chart_div" style="width: 400px; height: 120px;"  ></div>       
  <table class="table table-bordered table table-hover" cellspacing>
    <thead>
      <tr>
        <th>ID</th>
        <th>COMPANY</th>
        <th>YEAR</th>
         <th>SECTOR</th>
          <th>CREG</th>
           <th>PHONE</th>
            <th>REG-DATE</th>
        </tr>
    </thead>
      <tbody>
      <?php
include("dbconn.php");
 $query_select="SELECT * FROM ghgreg where ESTD!=0";  
   $run_query=mysqli_query($conn, $query_select);     
       
    while($result= mysqli_fetch_assoc($run_query))
{ ?>
       
       
       <tr>
        <td><?php echo $result["ID"] ?></td>
        <td><?php echo $result["CNAME"] ?></td>
        <td><?php echo $result["ESTD"] ?></td>
        <td><?php echo $result["sector"] ?></td>
        <td><?php echo $result["CREG"] ?></td>
        <td><?php echo $result["PHONE"] ?></td>
         <td>&ensp;&ensp;&ensp;&ensp;<?php echo $result["RDATE"] ?></td>
      </tr>
      <?php } ?>
    </tbody>
        </table>
    </div>
    
    <form>
    <?php     $query_select2="SELECT ID FROM ghgreg where ESTD!=0";
                    $query_select3="SELECT CNAME FROM ghgreg where ESTD!=0";
        $run_query2=mysqli_query($conn, $query_select2);
        $run_query3=mysqli_query($conn, $query_select3);?>   
        <select name='ID'>   <option>GEA:ID-->COMPANY NAME</option> <?php ;
        
        while($result2= mysqli_fetch_assoc($run_query2))
{  $result3= mysqli_fetch_assoc($run_query3);?>
   <option value=" <?php echo $result2["ID" ] ?>">GEA-ID:-><?php echo $result2["ID"] ?>--><?php echo $result3["CNAME"] ?></option>
   
<?php    } ?>
        </select>
    </form>
<br><br><br>
</body>
</html>