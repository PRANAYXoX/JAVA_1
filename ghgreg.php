<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GHG REGSTRATION</title>
  
    <style>
         
         body{
           font-family: 'Bungee';  font-size: 16px;  
           overflow:scroll;
                background: url("ghg3.jpeg");
                color: orangered;
                animation-name: animatebottom;
                animation-duration: 4s;
                position:relative;
       }
        @keyframes animatebottom{
            from{bottom: -200px; opacity: 0;}
            to{bottom: 100px;opacity: 1;}
        }
           h1{
           font-family: 'Bungee';  font-size: 40px;  
           
                top: -5%;
                color: forestgreen;
       }
        
        form{
    position: absolute;
    top: 900%;
    left:50%;
    width:980px;
    height: 1300px;
    padding: 60px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.9);
    box-sizing: border-box;
    box-shadow:0 15px 25px rgba(0,0,0,10);
    border-radius: 25px;

}
          form input{
              padding:12px 20px;
           font-size: 25px;
           top: 10%;
        border:none;
            
              background: rgba(0,0,0,0.0);
              border-bottom:2px solid red;
              color:darkolivegreen;
              
         
       }
         
         
       
        form input:hover{
       font-size: 30px;
        top: 10%;
         color:orangered;
               background-color:seagreen;
        
         background: rgba(0,0,0,0.0);
            transition: .9s;
            box-shadow:  0 0 10px red, 
                             0 0 20px red, 
                               0 0 40px red ;
        
       }
           form input[type=submit]{
              padding:14px 25px;
           font-size: 25px;
                 font-family: fantasy;
           top: 10%;
        border:2px solid red;
            
              background: rgba(0,0,0,0.0);
              border-bottom:2px solid red;
              color:darkolivegreen;
              
         
       }
         
         
       
        form input[type=submit]:hover{
       font-size: 30px;
            font-family: fantasy;
        top: 10%;
         color:white;
               background:darkred;
            
                 border:3px solid red;
        border-radius: 20%; 
            transition: .9s;
            box-shadow:  0 0 10px red, 
                             0 0 20px red, 
                               0 0 40px red ;
        
       }
              form input[type=reset]{
              padding:14px 25px;
           font-size: 25px;
                 font-family: fantasy;
           top: 10%;
        border:2px solid red;
            
              background: rgba(0,0,0,0.0);
              border-bottom:2px solid red;
              color:darkolivegreen;
              
         
       }
         
         
       
        form input[type=reset]:hover{
       font-size: 30px;
            font-family: fantasy;
        top: 10%;
         color:white;
               background:darkred;
            
                 border:3px solid red;
        border-radius: 20%;
            transition: .9s;
            box-shadow:  0 0 10px red, 
                             0 0 20px red, 
                               0 0 40px red ;
        
       }
             
 
    </style>
    </head>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>    
<body ><br>
   
   
    
    <form  method="post" action="">
        <center><p><b><h1>G.H.G.-Registraton Form</h1></b></p></center>
        <div>   <h2>Company Name</h2>
            <input class="firsttime" type="text" name="cname" placeholder="COMPANY NAME"  style="width:800px" required>
            
    
             <h2>ESTD. YEAR</h2>
                 <input class="year" type="text" name="year" placeholder="YEAR" maxlength="4" style="width:800px"required>
        </div>
        
     <h2 classname="sector">SECTOR:</h2>
            <select name="sector" id="sector" style="800px">
                <option value="energy">ENERGY</option>
                <option value="agriclture">AGRICULTURE</option>
                <option value="industriial process">INDUSTRAL PROCESS</option>
                <option value="waste">WASTE</option>
            </select>
             
             <h2 classname="reg">C-REG.NUMBER:</h2>
            <input class="reg" type="text" name="reg" placeholder="7 DIGIT" maxlength="7" style="width:800px"required><br>
             
            
             
            
            <h2>Phone Number</h2>
            <input class="phone" type="text" name="phone" placeholder="10 DIGIT" maxlength="10" style="width:800px" required><br>
            
            
            <h2>E-MAIL</h2>
             <input class="email" type="email" name="email" placeholder="Email@Address"  style="width:800px"required><br>
            
            <br><br>
            <input type="submit" class="btnRegister" name="submit" value="submit" style="width:420px">
             <input type="reset" class="btnRegister" name="CLEAR" style="width:420px">
         
    </form>
  
</body>
</html>
  <?php
include("dbconn.php");

$phone=0;
$cname=" ";
$year=0;
$sector=" ";
$email=" ";
$reg=" ";
$id=1000;
if(isset($_POST[ 'submit' ] ))
{
    $cname = $_POST[ 'cname' ];
    $year = $_POST[ 'year' ];
    $email = $_POST[ 'email' ];
    $phone = $_POST[ 'phone' ];
    $reg=$_POST['reg'];
    $sector=$_POST['sector'];
    }

    $_query="INSERT INTO ghgreg(ID,CNAME, ESTD,sector,CREG, PHONE,EMAIL, RDATE) VALUES ( ' ','$cname' , '$year', '$sector','$reg' , '$phone' , ' $email' , curdate())";

mysqli_query($conn,$_query );
 ?>