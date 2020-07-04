<?php

$db='hospital';
$user='root';
$pass='';
$un='admin';
$pswd='12345';

$con=mysqli_connect("",$user,$pass,$db) or die("error in connection ");

$a=$_POST["n1"];
$b=$_POST["n2"];

if($a==$un && $b==$pswd)
header("Location: /hospital/manager/");
else
header("Location: /hospital/login/");

?>