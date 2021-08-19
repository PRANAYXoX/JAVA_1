<!DOCTYPE html>
 <?php
include("dbconn.php");
include("ghgfnc.php");
$msg=' '; $msg2=' '; 
$phone=0;
$cname=" ";
$year=0;
$sector=" ";
$email=" ";
$reg=" ";
$id=rand(10000,99990);
$curr=$id;
$image="";
if(isset($_POST[ 'submit' ] ))
{
    $cname = $_POST[ 'cname' ];
    $year = $_POST[ 'year' ];
    $email = $_POST[ 'email' ];
    $phone = $_POST[ 'phone' ];
    $reg=$_POST['reg'];
    $sector=$_POST['sector'];
$image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    $checkbox=isset($_POST['term']);
  // echo $cname."</br>".$year."</br>".$sector."</br>".$reg."</br>".$phone."</br>".$email."</br>".$image."</br>".$checkbox;



    
     if($checkbox==0)
{
    $msg="<div class='error'>PLEASE CHECK</div>";
} 
    else
{
        move_uploaded_file($tmp_image,"image/$image");
        $_query="INSERT INTO ghgreg(ID,CNAME, ESTD,sector,CREG, PHONE,EMAIL, RDATE,image) VALUES ( '$curr','$cname' , '$year', '$sector','$reg' , '$phone' , ' $email' , curdate(),'$image')";
mysqli_query($conn,$_query );
$msg2="<div class='success'><span>YOU HAVE SUCCESSFULLY REGISTERED!!</span><br><span>YOUR UNIQUE G.E.A. ID IS::</span>&nbsp;&nbsp;<span class='error'>".$id."</span><br><span>YOUR COMPANY NAME IS::</span>&nbsp;&nbsp;<span class='error'>".$cname."</span><br><a href='ghgl3.html'><span class='error'>CLICK HERE</span></a></div>";
  echo $msg2; 
    }
}
?>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GHG REGISTRATION</title>
  
    <style>
         
         body{
           font-family: 'Bungee';  font-size: 16px;  
           overflow:scroll;
                background: url("ghg2.jpg");
             background-size: 170%;
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
    top: 1550%;
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
               border-radius: 20px;
              
              background: rgba(0,0,0,0.0);
              border-bottom:2px solid red;
              color:darkolivegreen;
              
         
       }
         
         
       
        form input:hover{
       font-size: 30px;
        top: 10%;
         color:orangered;
    
        border-radius: 25px;
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
        .error{
            color:red;
            font-size: 50px;
        }      
           .success{
            
                  font-family:fantasy;
            
               font-size: 50px;
               text-align: center;
        }      
         .success:hover{
             text-shadow:  3 4 5px orange;
             font-family:fantasy;
               font-size:55px;
               text-align: center;
             transition: .9s;
        }    
       span{
           border: 1px solid limegreen; 
           border-radius: 10px;
           background-color:; opacity:0.8; filter:alpha(opacity=500);
        
           background: black;
           color: lawngreen;
       }
       span:hover{   
           font-size: 55px;
           background: ;
    color:green;
    border-radius: 10px;
           box-shadow:  0 0 35px orangered, 
                             0 0 60px orangered, 
                               0 0 110px orangered ;
    
           transition: .9s;
       }
 
    </style>
    </head>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>    
<body ><br>
   
   
    
    <form  method="POST" enctype="multipart/form-data" action="">
        <center><p><b><h1>G.E.A.-Registration Form</h1></b></p></center>
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
            </select>   &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label>Profile:</label>
            <input type='file' name='image' style="width:350px"/>
             
             <h2 classname="reg">C-REG.NUMBER:</h2>
            <input class="reg" type="text" name="reg" placeholder="7 DIGIT" maxlength="7" style="width:800px"required><br>
             
            
             
            
            <h2>Phone Number</h2>
            <input class="phone" type="text" name="phone" placeholder="10 DIGIT" maxlength="10" style="width:800px" required><br>
            
            
            <h2>E-MAIL</h2>
             <input class="email" type="email" name="email" placeholder="Email@Address"  style="width:800px"required><br>
            
          <input type='checkbox' name='term' required/>I AGREE THE TERMS AND CONDTIONS
            <br><br>
            <input type="submit" class="btn btn-success" name="submit" value="submit" style="width:420px">
             <input type="reset" class="btnReset" name="CLEAR" style="width:420px">
       
    </form>
  
</body>
</html>
 