<?php
include("dbconn.php");
$id=0;
$id=$_GET['del'];

mysqli_query($conn,"delete FROM ghgreg where ID='$id' ");
mysqli_query($conn,"delete FROM ghgrate2 where CID='$id' ");
header("location:ghgadmin.php");

?>