<?php
include "connect.php";


$key = "";
$methods = "";
$value ="";
$ids = "";
if (!empty($_GET)) {
    // code...
    $key = $_GET["key"];
    $methods = $_GET["method"];
    $value = $_GET["dorate"];
    $ids = $_GET["ids"];
}else {
    // code...
    $key = "";
    $methods = "";
    $value ="";
    $ids = "";
}





if ($methods == "insert" || $methods == "post"){
    insertRate($key,$value,$mycon,$ids);
}


/***
 *  this is the controller method for inserting all ratings
 * into the database (dbname = ratings).
 * it check key value for auth, then also test for fields emptiness, then
 * send to db for the real insertion. this method
 * then return success or failure after all process.
 * @Param Key,School object
 ***/

function insertRate($key,$value,$mycon,$ids){

    if ($key == "1234567opiuyt") {

        $query  = "INSERT INTO `ratings`(`id`, `rater`, `lecturer_id`, `rates`, `date`, `status`)
                    VALUES (null,'ali','$ids','$value',now(),'0')";
        $insert = mysqli_query($mycon,$query);
        if (!$insert){
            echo 'False';
        }
        else
        {
            echo "True";
        }
    }
}




?>
