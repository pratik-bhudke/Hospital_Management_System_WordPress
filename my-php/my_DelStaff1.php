<?php

$db='hospital';
$user='root';
$pass='';

$con=mysqli_connect("",$user,$pass,$db) or die("error in connection ");

if(mysqli_query($con,"DELETE FROM `hospital`.`staff` where 1;"))
echo "STAFF DATABASE CLEARED"

?>