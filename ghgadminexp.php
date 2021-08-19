<?php
 include("dbconn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            background-image: url(ghg10.jpg);
            background-size:100%;
        }
    .android1{
    position: absolute;
    top: 30%;
    left:40%;
    width:600px;
    height: 180px;
    padding: 60px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.1);
    box-sizing:border-box;
    box-shadow:0 1px 2px rgba(0,0,0,1);
    border-radius: 25px;
    }
         .android1:hover{
    position: absolute;
    top: 30%;
    left:40%;
    width:600px;
    height: 180px;
    padding: 60px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.8);
    box-sizing:padding-box;
    box-shadow:0 15px 25px rgba(0,0,0,10);
    border-radius: 25px;
             transition: 1s;
    }
           .ID{
            color:transparent;
            background-color: transparent;
           font-family: cursive;
            font-size: 20px;
            border: 0px;
            border-radius: 10px;
            border-collapse: collapse;
            height: 50px;
            border-bottom: 2px;
            border-bottom-color: red;
        }
        .ID:hover{
            color:chartreuse;
            background-color: black;
           font-family: cursive;
            font-size: 20px;
            border: 0px;
            border-radius: 10px;
            border-collapse: collapse;
            height: 50px;
            border-bottom: 2px;
            border-bottom-color: red;
            transition: 1s;
        }
    </style>
</head>
<body>
     <form class="android1">
    <?php     
        
         $query_select2="SELECT ID FROM ghgreg where ESTD!=0";
                    $query_select3="SELECT CNAME FROM ghgreg where ESTD!=0";
        $run_query2=mysqli_query($conn, $query_select2);
        $run_query3=mysqli_query($conn, $query_select3);?>   
        <select class="ID">   <option>GEA:ID-->COMPANY NAME</option> <?php ;
        
        while($result2= mysqli_fetch_assoc($run_query2))
{  $result3= mysqli_fetch_assoc($run_query3);?>
   <option value=" <?php echo $result2["ID" ] ?>">GEA-ID:-><?php echo $result2["ID"] ?>--><?php echo $result3["CNAME"] ?></option>
   
<?php    } ?>
        </select>
    </form>
</body>
</html>