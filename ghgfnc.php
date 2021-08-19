<?php
$row=0;
function email_exists($cname,$conn)
{
    $row=mysqli_query($conn,"select id from ghgreg where CNAME='$cname' ");
   // print_r($row);
    {
        if(mysqli_num_rows($row)==1)
        {
            return true;
        }
        else{
            return false;
        }
    }
}

?>