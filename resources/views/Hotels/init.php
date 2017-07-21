<?php
/**
 * Created by PhpStorm.
 * User: Heshan
 * Date: 7/19/2017
 * Time: 10:13 PM
 */
require  "init.php";
$id=$_POST['id'];


$q = "SELECT * FROM contacts where id=?";
$query = $this->prepare($q);


if(mysqli_query($con,$sql)){
	echo "<br><h3>Row Inserted</h3>";
}
else{
	echo "error in insertion".mysqli_error($con);