<?php

$db='hospital';
$user='root';
$pass='';

$con=mysqli_connect("",$user,$pass,$db) or die("error in connection ");

$a=$_POST["n1"];
$b=$_POST["n2"];
$c=$_POST["n3"];
$d=$_POST["n4"];
$e=$_POST["n5"];
$f=$_POST["n6"];
$g=$_POST["n7"];
$h=$_POST["n8"];

if($a=="" || $b=="" || $c=="" || $d=="" || $e=="" || $f=="" || $g=="" || $h=="")
echo "Some DATA fields are EMPTY. Please recheck the form and SUBMIT again.....";
else if(mysqli_query($con,"INSERT INTO `hospital`.`staff`(`sno`, `sname`, `email`, `sphone`, `sp`, `qual`, `exp`, `addr`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h');"))
header("Location: /hospital/manager/add-staff/");
else
echo "ERROR"

?>