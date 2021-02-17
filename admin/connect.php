<?php
ob_start();
$devType = "stage";
$host = ($devType === "dev") ? "localhost" : "us-cdbr-east-03.cleardb.com";
$user = ($devType === "dev") ? "root" : "b3e7acdd7f8b20" ;
 $password = ($devType === "dev") ? "" : "0f4536ab" ;
 $database = ($devType === "dev") ? "rate" :  "heroku_460c654d415c0ef";
$mycon=mysqli_connect($host,$user,$password);
if (!$mycon){
    echo 'error'.  die();
}  else {
   // echo 'alert...';
    $getdb = mysqli_select_db($mycon,$database);
    if (!$getdb){
    echo 'error'.  die();

} else {
    // echo 'alert...oooo';
}
}
