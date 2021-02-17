<?php
ob_start();
$host = "localhost";
$user = "root";
 $password ="";
 $database ="rate";
$mycon=mysqli_connect($host,$user,$password);
if (!$mycon){
    echo 'error';
}  else {
   // echo 'alert...';
    $getdb = mysqli_select_db($mycon,$database);
    if (!$getdb){
    echo 'error';

} else {
    // echo 'alert...oooo';
}
}
