<?php 
$server="localhost";
$username="root";
$password="";
$database="awt";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo " Database ConnECTION SUCCESSFULL!!....";
}
else
{
    echo"FAIL!!" . mysqli_error($conn);
    die($conn);
} ?>