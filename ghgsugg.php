 <?php
include("dbconn.php");


$cname=" ";

$sugg=" ";
if(isset($_POST[ 'submit' ] ))
{
    $cname = $_POST[ 'cname' ];
    $sugg = $_POST[ 'sugg' ];
    
    }

    $_query="INSERT INTO ghgsugg(CNAME, SUGG) VALUES ( '$cname' , '$sugg') ";

mysqli_query($conn,$_query );
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <link rel="stylesheet" type="text/css" href="styles1.css">
              
    <style>
    #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
        .login-box{
    position: absolute;
    top: 62%;
    left:50%;
    width:400px;
    height: 500px;
    padding: 60px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.9);
    box-sizing: border-box;
    box-shadow:0 15px 25px rgba(0,0,0,10);
    border-radius: 25px;
    }
        #sug{
            height:200px;
            width:280px;
            background-color: transparent;
            color:red;
            font-family: sans-serif;
            
            font-size: 20px;
        }
          div  .hype{
           font-size: 10px;
           margin-top: 20px;
        
         
       }
       
        .btn1{
    position:sticky;
    display: inline-block;
    padding: 10px 20px;
    color: chartreuse;
     font-family: monospace; 
    font-size: 14px;
    text-transform: uppercase;
    text-decoration: none;
    overflow: hidden;
    margin-top:  -5px;
    letter-spacing: 4px;
    margin-right: auto;
    background: transparent;
    opacity: 0.p;
    border-radius: 10px;
     
}
        .rev1{
            border-radius:20px;
            background-color: lawngreen;
        }
         .rev2{
            border-radius:20px;
             background-color: red;
        }
         .rev3{
            border-radius:20px;
             background-color: dodgerblue;
             color: bisque;
        }
    </style>
    <script>
    function show()
        {
            document.getElementById("b1").style.visibility="hidden";
             document.getElementById("rev").style.visibility="visible";
        }
        function hide()
        {
            document.getElementById("b1").style.visibility="visible";
             document.getElementById("rev").style.visibility="visible";
        }
        function redir()
        {
            window.location.href="ghgl5.php"
        }
    </script>
</head>
<body>
   
    <video autoplay muted=false loop id="myVideo">
  <source src="ghgv.mp4" type="video/mp4">
 
  </video>
   
     <div class="hid">
     <center>
     
           <div class="login-box" id="b1">
       <img src="bargif.gif" alt="avatar" class="avatar">
       <form action="#" method="post">
           <div class="user-box">
              <input type="text" name="cname" required>
               <label>NAME</label><br>
                            </div>
    <br><br><div class="user-box">
             
        <textarea placeholder="G.&#8721;.A. SUGGESTION-BOX" id="sug" tabindex="5" name="sugg" required></textarea>
              
               </div>
               <div class="hype">
           
              <input type="submit" name="submit"  value="SUGGEST" class="btn1"><br>
              </div>
      </form>
        <div id="rev">
     
     <input type="submit" class="rev1"  value=" "onclick="hide()"/>
    <input type="submit" class="rev2" value=" " onclick="show()"/>
     <input type="submit" class="rev3" value="X" onclick="redir()"/>

    </div>
        </div>
      
      </center>
     </div>
    </body>
</html>