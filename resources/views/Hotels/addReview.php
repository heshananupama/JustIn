<?php
/**
 * Created by PhpStorm.
 * User: Heshan
 * Date: 7/19/2017
 * Time: 10:13 PM
 */
require  "init.php";
$name=$_POST['name'];
$review=$_POST['review'];
$rating=$_POST['rating'];

$sql="insert into feed VALUES ('$name','$review','$rating')";

if(mysqli_query($con,$sql)){
    echo "<br><h3>Row Inserted</h3>";
}
else{
    echo "error in insertion".mysqli_error($con);
}

