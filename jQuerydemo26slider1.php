<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
    var i=0;
        var i_src=new Array();
        i_src[0]="image/1.jpg";
        i_src[1]="image/2.jpg";
        i_src[2]="image/3.jpg";
        function swapImage()
        {
            document.slide.src=i_src[i];
            if(i<i_src.length-1)
                {
                    i++;
                }
            else{
                i=0;
            }
            setTimeout("swapImage()",3000);
            
        }
        window.onload=swapImage; //calls swapImage function automatically ones the page is loaded
    </script>
<style>
    .img_slider{
        position:absolute;
        width: 760px;
        height: 580px;
        padding: 18px;
        background-color:navajowhite;
        text-align: center;
        overflow: hidden;
        left:300px;
        border-radius: 10px;
        
    }
    #im{
        width: 720px;
        height: 550px;
        border-style: solid;
        border-color: darkred;
        box-shadow: 5px 0px 0px black,
                    20px 30px 5px black,
                    0px 0px 40px black;
        border-radius: 10px;
        
    }
    body{
        margin: 0px;
        padding: 0px;
        overflow: scroll;
    }
    
</style>
</head>

<body><h1>SLIDER USING JAVASCRIPT</h1>
   <div class="img_slider">
       <img id="im" src="image/1.jpg" name="slide">
  
       </div>
    
</body>
</html>