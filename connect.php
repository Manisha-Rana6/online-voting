<?php
$connect=mysqli_connect("localhost","root","","online-voting") or die("connection failed");
if($connect){
    echo"connect!";
}
else{
    echo"not connected";
}


